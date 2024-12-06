<?php
//Lưu ý : muốn chạy User thì comment hết phần code của TinTuc , bỏ comment User
//        muốn chạy TinTuc thì comment hết phần code của User , bỏ comment TinTuc
// Phần chung luôn bật


//Tin tức
require_once __DIR__ . '/../app/model/dbConnect.php';
require_once __DIR__ . '/../app/model/DataTinTuc.php';
require_once __DIR__ . '/../app/controller/TinTucController.php';


//User
require_once __DIR__ . '/../app/model/dbConnect.php';
require_once __DIR__ . '/../app/model/DataUser.php';
require_once __DIR__ . '/../app/controller/UserController.php';



//Chung
$data = new Database();
$data->getConnection();


//Tin tức
$dataTinTuc_MD = new DataNews($data);
$tintucController = new TinTucController($dataTinTuc_MD);


// //User
// $DataUserModel = new DataUser($data);
// $UserController = new UserController($DataUserModel);



//Chung
$action = $_GET['action'] ?? 'Khong';

//DanhSachchitiet

switch($action){
    case 'getAllTinTuc':
       $tintucController->getDanhSachTinTuc();
             break;
    default:
        $tintucController->getDanhSachTinTuc();
}

// //Tin tức
// switch ($action) {
//     case 'getAllTinTuc':
//         $tintucController->getQuanlyTinTuc();
//         break;
//     case 'AddTinTuc':
//         $tintucController->addTinTuc();
//         break;
//     case 'editTinTuc':
//         $tintucController->editTinTuc();
//         break;
//     case 'removeTinTuc':
//         $tintucController->deleteTinTuc();
//         break;
//     default:
//         $tintucController->getQuanlyTinTuc();
// }





// //User
// switch ($action) {
//     case 'getAllUser':
//         $UserController->getAllUserController();
//         break;
//     case 'addUser':
//         $UserController->addUserController();
//         break;
//     case 'editUser':
//         $UserController->editUserController();
//         break;
//     case 'removeUser':
//         $UserController->removeUserController();
//         break;
//     default:
//         $UserController->getAllUserController();
// }

