<?php
require_once __DIR__ . '/../app/model/dbConnect.php';
require_once __DIR__ . '/../app/model/DataUser.php';
require_once __DIR__ . '/../app/model/User.php';
require_once __DIR__ . '/../app/controller/UserController.php';
$database = new Database();
$dataUser = new DataUser($database);
//$dataUser->addUser(new User("An" , "123" , 0));

$userController = new UserController($dataUser);



$action = $_GET['action'] ?? 'getAllUserController';

switch ($action) {
    case 'getAllUsers':
        $userController->getAllUserController();
        break;
    case 'addUser':
        $userController->addUserController();
        break;
    default:
        $userController->getAllUserController();
        break;
}
?>