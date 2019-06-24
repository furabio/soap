<?php


class CustomerDAO extends Connection
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM customers c INNER JOIN users u ON c.user_id = u.id";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function create(Customer $customer)
    {
        $sql = "INSERT INTO customers (user_id, cpf) VALUES (?, ?)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $customer->getUser()->getId());
            $stmt->bindValue(2, $customer->getCpf());
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}