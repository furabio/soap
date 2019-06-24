<?php


class CustomerResource
{
    public function index()
    {
        $opcao = array('location' => 'http://localhost/empresas/service/CustomerServiceSoap.php', 'uri' => 'http://localhost');
        $client = new SoapClient(null, $opcao);
        $customers = $client->findAll();

        require_once "view/customer/index.php";
    }

    public function create()
    {
        include "lib/nusoap.php";

        $client = new nusoap_client("http://localhost/empresas/service/UserServiceNusoap.php?wsdl");
        $users = json_decode($client->call("UserServiceNusoap.findAll"), true);

        require_once "view/customer/create.php";
    }

    public function store()
    {
        if ($_POST) {
            $opcao = array('location' => 'http://localhost/empresas/service/CustomerServiceSoap.php', 'uri' => 'http://localhost');

            $client = new SoapClient(null, $opcao);
            $client->create($_POST["user"], $_POST["cpf"]);

            header('location:index.php?controller=CustomerResource&method=index');
        }
    }
}