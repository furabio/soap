<?php


class PersonResource
{
    public function index()
    {
        $persons = json_decode(file_get_contents('https://reqres.in/api/users?per_page=12'));
        $persons = $persons->data;
        require_once 'view/person/index.php';
    }
}