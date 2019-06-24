<?php

class RoleDAO extends Connection
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM roles";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function create(Role $role)
    {
        $sql = "INSERT INTO roles (name) VALUES (?)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $role->getName());
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}