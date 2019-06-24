<?php

class UserResource
{
    public function index()
    {
        include "lib/nusoap.php";

        $client = new nusoap_client("http://localhost/empresas/service/UserServiceNusoap.php?wsdl");
        $users = json_decode($client->call("UserServiceNusoap.findAll"), true);
        require_once "view/user/index.php";
    }

    public function create()
    {
        $companies = json_decode(file_get_contents("http://localhost/empresas/service/CompanyServiceRest.php?oper=findAll"));
        $roles = json_decode(file_get_contents("http://localhost/empresas/service/RoleServiceRest.php?oper=findAll"));
        require_once "view/user/create.php";
    }

    public function store()
    {
        include "lib/nusoap.php";
        if ($_POST) {
            $client = new nusoap_client("http://localhost/empresas/service/UserServiceNusoap.php?wsdl");
            $parametros = array(
                "username" => $_POST["username"],
                "email" => $_POST["email"],
                "password" => $_POST["password"],
                "role_id" => $_POST["role"],
                "company_id" => $_POST["company"],
            );
            $client->call("UserServiceNusoap.create", $parametros);


            header('location:index.php?controller=UserResource&method=index');
        }
    }
}