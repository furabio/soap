<?php

class Subsidiary
{

    private $id;
    private $name;
    private $company;

    /**
     * SubsidiaryServiceNusoap constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id = null, $name = null, $company = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param null $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

}