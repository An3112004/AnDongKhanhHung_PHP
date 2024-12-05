<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Tin Tức</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #212529;
        }

        .form-group label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="form-title">Sửa Tin Tức</h2>

        <!-- Form Sửa Tin Tức -->
        <form action="process_edit_news.php" method="POST" enctype="multipart/form-data">
            <!-- Giả sử bạn đã có một ID cho tin tức -->
            <input type="hidden" name="news_id" value="ID_CỦA_TIN_TỨC">

            <div class="mb-3 form-group">
                <label for="news_name" class="form-label">Tên Tin Tức</label>
                <input type="text" class="form-control" id="news_name" name="news_name" placeholder="Nhập tên tin tức" value="Tên tin tức cũ" required>
            </div>

            <div class="mb-3 form-group">
                <label for="title" class="form-label">Tiêu Đề Tin Tức</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề tin tức" value="Tiêu đề cũ" required>
            </div>

            <div class="mb-3 form-group">
                <label for="content" class="form-label">Nội Dung Tin Tức</label>
                <textarea class="form-control" id="content" name="content" placeholder="Nhập nội dung tin tức" rows="6" required> Nội dung tin tức cũ</textarea>
            </div>

            <div class="mb-3 form-group">
                <label for="date" class="form-label">Ngày Đăng</label>
                <input type="date" class="form-control" id="date" name="date" value="2024-12-01" required>
            </div>

            <div class="mb-3 form-group">
                <label for="image" class="form-label">Hình Ảnh Tin Tức</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <small class="form-text text-muted">Chỉ tải lên nếu bạn muốn thay đổi hình ảnh.</small>
            </div>

            <button type="submit" class="btn btn-primary">Cập Nhật Tin Tức</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
