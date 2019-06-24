<?php

include "../lib/nusoap.php";
require_once "../model/DAO/Connection.php";
require_once "../model/DAO/SubsidiaryDAO.php";
require_once "../model/Subsidiary.php";
require_once "../model/Company.php";

$servidor = new nusoap_server();
$servidor->configureWSDL("Subsidiary");
$servidor->wsdl->schemaTargetNamespace = "Subsidiary";

class SubsidiaryServiceNusoap {

    public function findAll()
    {
        $subsidiaryDAO = new SubsidiaryDAO();
        return json_encode($subsidiaryDAO->findAll());
    }

    public function create($name, $companyId)
    {
        $company = new Company($companyId);
        $subsidiary = new Subsidiary(null, $name, $company);
        $subsidiaryDAO = new SubsidiaryDAO();
        $subsidiaryDAO->create($subsidiary);
    }


}

//registrar servico
$servidor->register("SubsidiaryServiceNusoap.findAll",
    array(),
    array("retorno" => "xsd:string"),
    "Subsidiary",
    "Subsidiary#findAll",
    "rpc",
    "encoded",
    "find all subsidiaries in database");

$servidor->register("SubsidiaryServiceNusoap.create",
    array(
        "name" => "xsd:string",
        "company_id" => "xsd:string",
    ),
    array(),
    "Subsidiary",
    "Subsidiary#create",
    "rpc",
    "encoded",
    "create subsidiary");

$chamada = file_get_contents("php://input");
$servidor->service($chamada);
