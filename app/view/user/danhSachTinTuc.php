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
        <!-- Các tin tức sẽ được hiển thị tại đây -->
        <div class="col-md-4">
            <a href="chi_tiet_San_Pham.php?id=1" class="news-card">
                <img src="https://via.placeholder.com/150" alt="Tin tức 1">
                <h5>Tin tức 1</h5>
                <p class="news-date">Ngày tạo: 2024-12-01</p>
                <p>Nội dung tóm tắt của tin tức 1. Đây là đoạn giới thiệu ngắn gọn...</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="chi_tiet_San_Pham.php?id=2" class="news-card">
                <img src="https://via.placeholder.com/150" alt="Tin tức 2">
                <h5>Tin tức 2</h5>
                <p class="news-date">Ngày tạo: 2024-12-02</p>
                <p>Nội dung tóm tắt của tin tức 2. Đây là đoạn giới thiệu ngắn gọn...</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="chi_tiet_San_Pham.php?id=3" class="news-card">
                <img src="https://via.placeholder.com/150" alt="Tin tức 3">
                <h5>Tin tức 3</h5>
                <p class="news-date">Ngày tạo: 2024-12-03</p>
                <p>Nội dung tóm tắt của tin tức 3. Đây là đoạn giới thiệu ngắn gọn...</p>
            </a>
        </div>
    </div>
</div>

</body>
</html>
