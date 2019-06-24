<?php


class ProductDAO extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM products";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function create($product)
    {
        $sql = "INSERT INTO products (name, description) VALUES (?, ?)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(1, $product->getName());
            $stmt->bindValue(2, $product->getDescription());
            $stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}