<?php


class UserDAO extends Connection
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM users";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function create(User $role)
    {
        $sql = "INSERT INTO users (username, email, password, role_id, company_id) VALUES (?, ?, ?, ?, ?)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $role->getUsername());
            $stmt->bindValue(2, $role->getEmail());
            $stmt->bindValue(3, $role->getPassword());
            $stmt->bindValue(4, $role->getRole()->getId());
            $stmt->bindValue(5, $role->getCompany()->getId());
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}