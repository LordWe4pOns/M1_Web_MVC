<?php

require_once 'models/user/User.php';

class LoginController {
    private $model;

    public function __construct($db) {
        $this->model = new User($db);
    }

    public function login(): void {
        session_start();
        $message = "";

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            require 'views/user/login.php';
            return;
        }
        
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        if (empty($login) || empty($password)) {
            $message = "Both fields are required.";
            require 'views/user/login.php';
            return;
        }

        $user = $this->model->getUserByLogin($login);
        if ($user === null || !password_verify($password, $user['user_password'])) {
            $message = "Invalid login or password.";
            require 'views/user/login.php';
            return;
        }

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_login'] = $user['user_login'];
        $_SESSION['admin'] = $user['admin'];
        header('Location: index.php?action=profile');
        exit();
    }

    public function logout(): never {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php?action=login');
        exit();
    }

}