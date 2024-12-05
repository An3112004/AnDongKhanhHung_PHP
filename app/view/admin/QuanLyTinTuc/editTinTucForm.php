<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Sản Phẩm</title>
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
        <h2 class="form-title">Sửa Sản Phẩm</h2>

        <!-- Form Chỉnh Sửa Sản Phẩm -->
        <form action="process_edit_product.php" method="POST" enctype="multipart/form-data">
            <!-- Trường ẩn lưu ID sản phẩm -->
            <input type="hidden" id="id" name="id" value="<!-- ID sản phẩm từ cơ sở dữ liệu -->">

            <div class="mb-3 form-group">
                <label for="name" class="form-label">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" value="<!-- Tên sản phẩm muốn thay đổi -->" required>
            </div>

            <div class="mb-3 form-group">
                <label for="description" class="form-label">Mô Tả Sản Phẩm</label>
                <textarea class="form-control" id="description" name="description" placeholder="Nhập mô tả sản phẩm" rows="4" required><!-- Mô tả sản phẩm muốn thay đổi --></textarea>
            </div>

            <div class="mb-3 form-group">
                <label for="price" class="form-label">Giá</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm (VNĐ)" value="<!-- Giá sản phẩm thay đổi -->" required>
            </div>

            <div class="mb-3 form-group">
                <label for="image" class="form-label">Hình Ảnh Sản Phẩm</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <!-- Hiển thị hình ảnh hiện tại -->
                <div class="mt-3">
                    <p>Hình ảnh thay đổi:</p>
                    <img src="<!-- Đường dẫn hình ảnh hiện tại -->" alt="Hình sản phẩm" style="width: 100%; max-width: 300px; border-radius: 10px;">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
