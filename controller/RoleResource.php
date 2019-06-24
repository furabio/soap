<?php

class RoleResource
{
    public function index()
    {
        $url = "http://localhost/empresas/service/RoleServiceRest.php?oper=findAll";
        $url = file_get_contents($url);
        $roles = json_decode($url);
        require_once "view/role/index.php";
    }

    public function create() {
        require_once "view/role/create.php";
    }

    public function store() {
        if($_POST) {
            $curl = curl_init("http://localhost/empresas/service/RoleServiceRest.php");

            $dados = array("name" => $_POST['name']);

            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
            curl_exec($curl);
            curl_close($curl);

            header("location: index.php?controller=RoleResource&method=index");
        }
    }
}
