<?php

require_once "../model/DAO/Connection.php";
require_once "../model/DAO/RoleDAO.php";
require_once "../model/Role.php";

class RoleServiceRest
{
    public function findAll()
    {
        $roleDAO = new RoleDAO();
        $roles = $roleDAO->findAll();
        return json_encode($roles);
    }

    public function create($name)
    {
        $role = new Role(null, $name);
        $roleDAO = new RoleDAO();
        $roleDAO->create($role);
    }

}

if (isset($_GET["oper"])) {
    if ($_GET["oper"] == "findAll") {
        $server = new RoleServiceRest();
        $roles = $server->findAll();
        exit($roles);
    }
}

if ($_POST) {
    $server = new RoleServiceRest();
    $server->create($_POST["name"]);
    exit();
}