<?php


class ProductResource
{
    public function index()
    {
        $opcao = array('location' => 'http://localhost/empresas/service/ProductServiceSoap.php', 'uri' => 'http://localhost');

        $client = new SoapClient(null, $opcao);
        $products = $client->findAll();
        require_once "view/product/index.php";
    }

    public function create()
    {
        require_once "view/product/create.php";
    }

    public function store()
    {
        if ($_POST) {
            $opcao = array('location' => 'http://localhost/empresas/service/ProductServiceSoap.php', 'uri' => 'http://localhost');

            $client = new SoapClient(null, $opcao);
            $client->create($_POST["name"], $_POST["description"]);

            header('location:index.php?controller=ProductResource&method=index');
        }
    }
}