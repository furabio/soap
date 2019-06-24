<?php

require_once "../model/DAO/Connection.php";
require_once "../model/DAO/CustomerDAO.php";
require_once "../model/Customer.php";
require_once "../model/User.php";

$opcao = array('uri' => 'http://localhost');
$server = new SoapServer(null,$opcao);

class CustomerServiceSoap
{
    public function findAll()
    {
        $customerDAO = new CustomerDAO();
        return $customerDAO->findAll();
    }

    public function create($userId, $cpf)
    {
        $user = new User($userId);
        $customer = new Customer(null, $user, $cpf);
        $customerDAO = new CustomerDAO();
        $customerDAO->create($customer);
    }

}

$server->setObject(new CustomerServiceSoap());
$server->handle();
