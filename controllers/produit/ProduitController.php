<?php
require_once __DIR__ . '/../../models/produit/Produit.php';

class ProduitController {
    private $produitModel;

    public function __construct($db) {
        $this->produitModel = new Produit($db);
    }

    public function index(): void {
        $produits = $this->produitModel->getAll();
        include __DIR__ . '/../../views/produit/list.php';
    }

    public function create(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->produitModel->create($_POST['type_p'], $_POST['designation_p'], $_POST['prix_ht'], $_POST['date_in'], $_POST['stock_p']);
            header("Location: index.php?action=produit_list");
            exit;
        }
        include __DIR__ . '/../../views/produit/create.php';
    }

    public function edit($id): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->produitModel->update($id, $_POST['type_p'], $_POST['designation_p'], $_POST['prix_ht'], $_POST['date_in'], $_POST['stock_p']);
            header("Location: index.php?action=produit_list");
            exit;
        }
        $produit = $this->produitModel->getById($id);
        include __DIR__ . '/../../views/produit/edit.php';
    }

    public function delete($id): void {
        $this->produitModel->delete($id);
        header("Location: index.php?action=produit_list");
    }
}