<?php

require_once 'models/user/User.php';

class ProfileController {
    private $model;

    public function __construct($db) {
        $this->model = new User($db);
    }

    public function showProfile(): void {
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit();
        }

        $user = $this->model->getUserById($_SESSION['user_id']);
        require 'views/user/profile.php';
    }
}
