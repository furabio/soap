<?php

class CompanyResource
{
    public function index()
    {
        $url = "http://localhost/empresas/service/CompanyServiceRest.php?oper=findAll";
        $url = file_get_contents($url);
        $companies = json_decode($url);
        require_once "view/company/index.php";
    }

    public function create() {
        require_once "view/company/create.php";
    }

    public function store() {
        if($_POST) {
            $curl = curl_init("http://localhost/empresas/service/CompanyServiceRest.php");

            $dados = array("name" => $_POST['name']);

            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
            curl_exec($curl);
            curl_close($curl);

            header("location: index.php?controller=CompanyResource&method=index");
        }
    }
}