<?php

class Customer
{

    private $id;
    private $user;
    private $cpf;

    public function __construct($id = null, $user = null, $cpf = null)
    {
        $this->id = $id;
        $this->user = $user;
        $this->cpf = $cpf;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
}