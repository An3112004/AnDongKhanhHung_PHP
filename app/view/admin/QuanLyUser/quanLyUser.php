<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Người Dùng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
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

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer a {
            text-decoration: none;
            color: #007bff;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .table td,
        .table th {
            text-align: center;
            vertical-align: middle;
        }

        .btn-edit {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .btn-edit:hover {
            background-color: #218838;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-add {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="form-title">Quản Lý Người Dùng</h2>

        <!-- Nút thêm người dùng -->
        <a href="add_user.php" class="btn btn-success btn-add">Thêm Người Dùng</a>

        <!-- Danh sách người dùng -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Họ và Tên</th>
                    <th>Email</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vòng lặp hiển thị danh sách người dùng -->
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>
                        <a href="edit_user.php?id=1" class="btn btn-edit">Sửa</a>
                        <a href="delete_user.php?id=1" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    <td>tranthib@gmail.com</td>
                    <td>
                        <a href="edit_user.php?id=2" class="btn btn-edit">Sửa</a>
                        <a href="delete_user.php?id=2" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <!-- Tiếp tục các người dùng khác -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
