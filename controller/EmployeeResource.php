<?php


class EmployeeResource
{

    public function index()
    {
        $data = json_decode(file_get_contents('http://dummy.restapiexample.com/api/v1/employees'));

        $employees = [];
        for ($i = (count($data) - 1); $i > (count($data) - 1) - 10; $i--) {
            array_push($employees, $data[$i]);
        }

        require_once 'view/employee/index.php';
    }
}