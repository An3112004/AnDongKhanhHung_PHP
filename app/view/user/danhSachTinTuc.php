<!-- /app/view/user/index.php -->
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
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .container { margin-top: 50px; }
        .news-card { border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; margin-bottom: 20px; background-color: #fff; transition: all 0.3s ease; text-decoration: none; color: inherit; }
        .news-card:hover { transform: scale(1.02); text-decoration: none; }
        .news-card img { max-width: 100%; height: auto; border-radius: 8px; }
        .news-card h5 { font-size: 1.25rem; margin-top: 10px; }
        .news-card p { margin-bottom: 10px; }
        .news-date { font-size: 0.9rem; color: #6c757d; }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Quản Lý Tin Tức</h1>
    <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Tên tin tức</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ảnh</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamic news rows will be injected here -->
                <?php

                foreach ($newList as $index => $value):
                ?>
                    <tr data-index="<?= $value['id'] ?>">
                        <td><?= htmlspecialchars($value['name']) ?></td>
                        <td><?= htmlspecialchars($value['title']) ?></td>
                        <td><?= htmlspecialchars($value['content']) ?></td>
                        <td><img src="<?= htmlspecialchars($value['image']) ?>" alt="<?= htmlspecialchars($value['image']) ?>" class="flower-image">
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>

</body>
</html>

<?php $conn->close(); ?>
