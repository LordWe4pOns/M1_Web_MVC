<?php

// debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/controllers/user/LoginController.php';
require_once __DIR__ . '/controllers/user/RegisterController.php';
require_once __DIR__ . '/controllers/user/ProfileController.php';
require_once __DIR__ . '/controllers/user/UserListController.php';
require_once __DIR__ . '/controllers/produit/ProduitController.php';

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
    
    case 'user_list':
        $controller = new UserListController($db);
        $controller->index();
        break;

    case 'user_delete':
        $controller = new UserListController($db);
        $id = $_GET['id'];
        $controller->deleteUser($id);
        break;

    case 'produit_list':
        $controller = new ProduitController($db);
        $controller->index();
        break;

    case 'produit_create':
        $controller = new ProduitController($db);
        $controller->create();
        break;

    case 'produit_edit':
        $controller = new ProduitController($db);
        $id = $_GET['id'];
        $controller->edit($id);
        break;

    case 'produit_delete':
        $controller = new ProduitController($db);
        $id = $_GET['id'];
        $controller->delete($id);
        break;

    default:
        echo "Unknown action.";
        break;
}