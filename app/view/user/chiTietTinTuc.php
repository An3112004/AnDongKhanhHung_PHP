<!-- /app/view/user/chiTietTinTuc.php -->
<?php
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

// Lấy ID tin tức từ URL
$id = $_GET['id'];

// Truy vấn chi tiết tin tức
$sql = "SELECT * FROM news WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Tin Tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .container { margin-top: 50px; }
        .news-detail-card { border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); background-color: #fff; padding: 20px; }
        .news-detail-card img { max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 20px; }
        .news-title { font-size: 2rem; font-weight: bold; margin-bottom: 10px; }
        .news-date { font-size: 0.9rem; color: #6c757d; margin-bottom: 20px; }
        .news-content { font-size: 1.1rem; line-height: 1.6; }
    </style>
</head>
<body>

<div class="container">
    <div class="news-detail-card">
        <img src="https://via.placeholder.com/600" alt="<?php echo $row['title']; ?>">
        <h1 class="news-title"><?php echo $row['title']; ?></h1>
        <p class="news-date">Ngày tạo: <?php echo $row['created_at']; ?></p>
        <div class="news-content">
            <p><?php echo $row['content']; ?></p>
        </div>
        <a href="../../../public/index.php" class="btn btn-primary mt-3">Quay lại danh sách tin tức</a>
    </div>
</div>

</body>
</html>

<?php $conn->close(); ?>
