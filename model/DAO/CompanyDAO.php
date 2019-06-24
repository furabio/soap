<?php

class CompanyDAO extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM companies";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function create(Company $company)
    {
        $sql = "INSERT INTO companies (name) VALUES (?)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $company->getName());
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}