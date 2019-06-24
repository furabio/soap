<?php

class SubsidiaryResource
{

    public function index()
    {
        include "lib/nusoap.php";

        $client = new nusoap_client("http://localhost/empresas/service/SubsidiaryServiceNusoap.php?wsdl");
        $subsidiaries = json_decode($client->call("SubsidiaryServiceNusoap.findAll"), true);
        require_once "view/subsidiary/index.php";
    }

    public function create()
    {
        $companies = json_decode(file_get_contents("http://localhost/empresas/service/CompanyServiceRest.php?oper=findAll"));
        require_once "view/subsidiary/create.php";
    }

    public function store()
    {
        include "lib/nusoap.php";
        if ($_POST) {
            $client = new nusoap_client("http://localhost/empresas/service/SubsidiaryServiceNusoap.php?wsdl");
            $parametros = array(
                "name" => $_POST["name"],
                "company_id" => $_POST["company"],
            );
            $client->call("SubsidiaryServiceNusoap.create", $parametros);


            header('location:index.php?controller=SubsidiaryResource&method=index');
        }
    }
}