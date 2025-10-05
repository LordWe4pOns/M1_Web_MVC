<?php

require_once 'models/user/User.php';

class RegisterController {
    private $model;

    public function __construct($db) {
        $this->model = new User($db);
    }

    public function register(): void {
        session_start();
        $message = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'] ?? '';
            $password = $_POST['password'] ?? '';
            $account_id = $_POST['account_id'] ?? '';
            $email = $_POST['email'] ?? '';

            if (empty($login) || empty($password) || empty($account_id) || empty($email)) {
                $message = "All fields are required.";
            } else {
                $success = $this->model->registerUser($login, $password, $account_id, $email);
                if ($success) {
                    header('Location: index.php?action=login');
                    exit();
                } else {
                    $message = "Registration failed. Please try again.";
                }
            }
        }

        require 'views/user/register.php';
    }
}
