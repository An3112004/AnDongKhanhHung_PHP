<?php
// Lấy dữ liệu từ URL (GET request)
$id = $_GET['id'] ?? '';
$name = $_GET['name'] ?? '';
$pass = $_GET['password'] ?? '';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Người Dùng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e66465, #9198e5);
        }

        .bg-gradient {
            background: linear-gradient(to bottom right, #f6d365, #fda085);
        }

        .card {
            border: none;
            border-radius: 15px;
        }

        .rounded-circle {
            width: 80px;
            height: 80px;
        }

        a.text-decoration-none {
            color: #007bff;
        }

        a.text-decoration-none:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100 bg-gradient">
        <div class="card shadow p-4" style="width: 400px;">
            <h4 class="text-center mb-3">Sửa Người Dùng</h4>
            <form action="index.php?action=editUser" method="POST">
                <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($name) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= htmlspecialchars($pass)?>">
                </div>
                <button type="submit" class="btn btn-primary w-100">Cập nhật Người Dùng</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>