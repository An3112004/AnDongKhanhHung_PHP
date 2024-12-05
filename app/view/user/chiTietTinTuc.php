<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Tin Tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .news-detail-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 20px;
        }
        .news-detail-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .news-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .news-date {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .news-content {
            font-size: 1.1rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="news-detail-card">
        <img src="https://via.placeholder.com/600" alt="Ảnh tin tức">
        <h1 class="news-title">Tiêu đề tin tức</h1>
        <p class="news-date">Ngày tạo: 2024-12-01</p>
        <div class="news-content">
            <p>
                Đây là nội dung chi tiết của tin tức. Nội dung có thể bao gồm nhiều đoạn văn bản mô tả đầy đủ thông tin về tin tức này. 
                Độc giả có thể xem thông tin chi tiết, ảnh minh họa và các thông tin liên quan khác.
            </p>
            <p>
                Nội dung có thể chứa các trích dẫn, số liệu thống kê hoặc bất kỳ thông tin bổ sung nào giúp tin tức hấp dẫn hơn.
            </p>
        </div>
        <a href="index.php" class="btn btn-primary mt-3">Quay lại danh sách tin tức</a>
    </div>
</div>

</body>
</html>
