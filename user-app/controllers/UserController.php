<?php
require_once __DIR__ . '/../models/User.php';

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            User::create($_POST);
            header('Location: index.php');
        } else {
            include '../views/create.php';
        }
        break;

    case 'edit':
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            User::update($id, $_POST);
            header('Location: index.php');
        } else {
            $user = User::find($id);
            include '../views/edit.php';
        }
        break;

    case 'delete':
        $id = $_GET['id'];
        User::delete($id);
        header('Location: index.php');
        break;

    default:
        $users = User::all();
        include '../views/list.php';
        break;
}
?>