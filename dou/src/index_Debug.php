<?php
session_start();
require_once __DIR__.'/src/controllers/AuthController_Debug.php'; // Updated to use AuthController_Debug

$authController = new AuthController();

$page = $_GET['page'] ?? 'login';

switch ($page) {
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'change_password':
        $authController->changePassword();
        break;
    default:
        $authController->login();
        break;
}
