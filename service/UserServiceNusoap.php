<?php

include "../lib/nusoap.php";
require_once "../model/DAO/Connection.php";
require_once "../model/DAO/UserDAO.php";
require_once "../model/User.php";
require_once "../model/Role.php";
require_once "../model/Company.php";

$servidor = new nusoap_server();
$servidor->configureWSDL("User");
$servidor->wsdl->schemaTargetNamespace = "User";

class UserServiceNusoap
{
    public function findAll()
    {
        $userDAO = new UserDAO();
        return json_encode($userDAO->findAll());
    }

    public function create($username, $email, $password, $companyId, $roleId)
    {
        $role = new Role($roleId, null);
        $company = new Company($companyId);
        $user = new User(null, $username, $email, $password, $role, $company);
        $userDAO = new UserDAO();
        $userDAO->create($user);
    }

}

//registrar servico
$servidor->register("UserServiceNusoap.findAll",
    array(),
    array("retorno" => "xsd:string"),
    "User",
    "User#findAll",
    "rpc",
    "encoded",
    "find all users in database");

$servidor->register("UserServiceNusoap.create",
    array(
        "username" => "xsd:string",
        "email" => "xsd:string",
        "password" => "xsd:string",
        "company_id" => "xsd:string",
        "role_id" => "xsd:string"
    ),
    array(),
    "User",
    "User#findAll",
    "rpc",
    "encoded",
    "find all users in database");

$chamada = file_get_contents("php://input");
$servidor->service($chamada);
