<?php

require_once 'models/user/User.php';

class UserListController {
    private $model;

    public function __construct($db) {
        $this->model = new User($db);
    }

    public function index(): void {
        $users = $this->model->getAll();
        include __DIR__ . '/../../views/admin/user_list.php';
    }

    public function deleteUser($id): void {
        $this->model->delete($id);
        header("Location: index.php?action=user_list");
    }
}