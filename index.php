<?php

// debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/database.php';
require_once 'controllers/user/LoginController.php';
require_once 'controllers/user/RegisterController.php';
require_once 'controllers/user/ProfileController.php';

$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'login':
        $controller = new LoginController($db);
        $controller->login();
        break;

    case 'register':
        $controller = new RegisterController($db);
        $controller->register();
        break;
    
    case 'profile':
        $controller = new ProfileController($db);
        $controller->showProfile();
        break;

    case 'logout':
        $controller = new LoginController($db);
        $controller->logout();
        break;

    default:
        echo "Unknown action.";
        break;
}