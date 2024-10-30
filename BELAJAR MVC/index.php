<?php
require_once 'config/database.php';
require_once 'app/controllers/UserController.php';

$dbConnection = getDBConnection();
$controller = new UserController($dbConnection);

$action = isset($_GET['action']) ? $_GET['action'] : 'show';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

switch ($action) {
    case 'show':
        $controller->show();
        break;
    case 'add':
        $controller->add();
        break;
    case 'store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'], 
            ];
            $controller->store($data);
        }
        break;
    case 'view':
        if ($id) {
            $controller->view($id);
        }
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'], 
            ];
 
            $controller->update($id, $data);
        }
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->show();
        break;
}