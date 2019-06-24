<?php

require_once "../model/DAO/Connection.php";
require_once "../model/DAO/ProductDAO.php";
require_once "../model/Product.php";

$opcao = array('uri' => 'http://localhost');
$server = new SoapServer(null,$opcao);

class ProductServiceSoap
{
    public function findAll()
    {
        $productDAO = new ProductDAO();
        return $productDAO->findAll();
    }

    public function create($name, $description)
    {
        $product = new Product(null, $name, $description);
        $productDAO = new ProductDAO();
        $productDAO->create($product);
    }

}

$server->setObject(new ProductServiceSoap());
$server->handle();
