<?php

require_once "../model/DAO/Connection.php";
require_once "../model/DAO/CompanyDAO.php";
require_once "../model/Company.php";

class CompanyServiceRest {
    public function findAll()
    {
        $companyDAO = new CompanyDAO();
        $companies = $companyDAO->findAll();
        return json_encode($companies);
    }

    public function create($name)
    {
        $company = new Company(null, $name);
        $companyDAO = new CompanyDAO();
        $companyDAO->create($company);
    }

}

if (isset($_GET["oper"])) {
    if ($_GET["oper"] == "findAll") {
        $server = new CompanyServiceRest();
        $companies = $server->findAll();
        exit($companies);
    }
}

if ($_POST) {
    $server = new CompanyServiceRest();
    $server->create($_POST["name"]);
    exit();
}