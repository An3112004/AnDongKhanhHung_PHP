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


// //Tin tức
// $dataTinTuc_MD = new DataNews($data);
// $tintucController = new TinTucController($dataTinTuc_MD);


// //User
// $DataUserModel = new DataUser($data);
// $UserController = new UserController($DataUserModel);



// //Chung
// $action = $_GET['action'] ?? 'Khong';


// //Tin tức
// // switch ($action) {
// //     case 'getAllTinTuc':
// //         $tintucController->getQuanlyTinTuc();
// //         break;
// //     case 'AddTinTuc':
// //         $tintucController->addTinTuc();
// //         break;
// //     case 'editTinTuc':
// //         $tintucController->editTinTuc();
// //         break;
// //     case 'removeTinTuc':
// //         $tintucController->deleteTinTuc();
// //         break;
// //     default:
// //         $tintucController->getQuanlyTinTuc();
// // }



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

// Kết nối với cơ sở dữ liệu


// Trang chủ, chỉ có liên kết tới danh sách tin tức


// Kết nối với cơ sở dữ liệu

// Kết nối với database

// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tintuc";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy danh sách tin tức
$sql = "SELECT * FROM news";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tin Tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .news-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
        }

        .news-card:hover {
            transform: scale(1.02);
            text-decoration: none;
        }

        .news-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .news-card h5 {
            font-size: 1.25rem;
            margin-top: 10px;
        }

        .news-card p {
            margin-bottom: 10px;
        }

        .news-date {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="mb-4">Quản Lý Tin Tức</h1>
        <div id="news-list" class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-md-4">
                    <a href="../app/view/user/chiTietTinTuc.php?id=<?php echo $row['id']; ?>" class="news-card">
                        <img src="https://via.placeholder.com/150" alt="Tin tức 1">
                        <h5>Tin tức 1</h5>
                        <p class="news-date">Ngày tạo: 2024-12-01</p>
                        <p>Nội dung tóm tắt của tin tức 1. Đây là đoạn giới thiệu ngắn gọn...</p>
                    </a>

                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>

<?php $conn->close(); ?>