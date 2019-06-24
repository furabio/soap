<?php

class SubsidiaryDAO extends Connection
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM subsidiaries";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function create($subsidiary)
    {
        $sql = "INSERT INTO subsidiaries (name, company_id) VALUES (?, ?)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $subsidiary->getName());
            $stmt->bindValue(2, $subsidiary->getCompany()->getId());
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}