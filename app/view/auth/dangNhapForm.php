<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
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
            background: linear-gradient(to bottom right, #d16ba5, #86a8e7, #5ffbf1);
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
        <div class="card shadow p-4" style="width: 350px;">
            <div class="text-center">
                <img src="https://via.placeholder.com/80" alt="Avatar" class="rounded-circle mb-3">
            </div>
            <h4 class="text-center mb-3">Đăng Nhập</h4>
            <p class="text-center text-muted mb-4">Đăng nhập để quản lý tất cả các thiết bị của bạn</p>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu của bạn">
                </div>
                <div class="mb-3 text-end">
                    <a href="#" class="text-decoration-none">Quên mật khẩu?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
            </form>
            <p class="text-center mt-4">Bạn chưa có tài khoản? <a href="#" class="text-decoration-none">Đăng Ký</a></p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
