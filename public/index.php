<?php
require_once __DIR__ . '/../app/model/dbConnect.php';
require_once __DIR__ . '/../app/model/DataTinTuc.php';
require_once __DIR__ . '/../app/controller/TinTucController.php';
$data = new Database();
$dataTinTuc_MD = new DataNews($data);
$tintucController = new TinTucController($dataTinTuc_MD);

$action = $_GET['action'] ?? 'getAllTinTuccontroller';

switch ($action) {
    case 'getAllTinTuc':
        $tintucController->getQuanlyTinTuc();
        break;
    case 'AddTinTuc':
        $tintucController->addTinTuc();
        break;
    case 'editTinTuc':
        $tintucController->editTinTuc();
        break;
    case 'removeTinTuc':
        $tintucController->deleteTinTuc();
        break;

    default:
        $tintucController->getQuanlyTinTuc();
}
