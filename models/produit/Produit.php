<?php

class Produit {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll(): mixed {
        $query = "SELECT * FROM produit";
        $statement = $this->db->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id): mixed {
        $query = "SELECT * FROM produit WHERE id_p = :id_p";
        $statement = $this->db->prepare($query);
        $statement->execute([':id_p' => $id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create($type, $designation, $prix_ht, $date_in, $stock): void {
        $query = "INSERT INTO produit (type_p, designation_p, prix_ht, date_in, stock_p) 
                  VALUES (:type_p, :designation_p, :prix_ht, :date_in, :stock_p)";
        $statement = $this->db->prepare($query);
        $statement->execute([
            ':type_p' => $type,
            ':designation_p' => $designation,
            ':prix_ht' => $prix_ht,
            ':date_in' => $date_in,
            ':stock_p' => $stock
        ]);
    }

    public function update($id, $type, $designation, $prix_ht, $date_in, $stock): void {
        $query = "UPDATE produit 
                SET type_p = :type_p, designation_p = :designation_p, prix_ht = :prix_ht, date_in = :date_in, stock_p = :stock_p 
                WHERE id_p = :id_p";
        $statement = $this->db->prepare($query);
        $statement->execute([
            ':type_p' => $type,
            ':designation_p' => $designation,
            ':prix_ht' => $prix_ht,
            ':date_in' => $date_in,
            ':stock_p' => $stock,
            ':id_p' => $id
        ]);
    }

    public function delete($id): void {
        $query = "DELETE FROM produit WHERE id_p = :id_p";
        $statement = $this->db->prepare($query);
        $statement->execute([':id_p' => $id]);
    }
}