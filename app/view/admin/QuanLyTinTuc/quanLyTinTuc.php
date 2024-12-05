<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tin tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #495057;
        }
        .modal-header {
            background-color: #007bff;
            color: #fff;
        }
        .modal-footer {
            background-color: #f1f1f1;
        }
        #add-news {
            margin-top: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Quản lý tin tức</h1>
    <div class="mb-3">
        <input type="text" id="search" class="form-control" placeholder="Tìm kiếm tin tức..." oninput="searchNews()">
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Tên tin tức</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Ảnh</th>
                <th>Ngày tạo</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody id="news-list">
            <!-- Dynamic news rows will be injected here -->
        </tbody>
    </table>
    
    <button id="add-news" class="btn btn-primary">Thêm tin tức</button>
</div>

<!-- Modal for adding/editing news -->
<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsModalLabel">Thêm tin tức mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="newsForm">
                    <div class="mb-3">
                        <label for="newsName" class="form-label">Tên tin tức</label>
                        <input type="text" class="form-control" id="newsName" required>
                    </div>
                    <div class="mb-3">
                        <label for="newsTitle" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="newsTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="newsContent" class="form-label">Nội dung</label>
                        <textarea class="form-control" id="newsContent" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="newsImage" class="form-label">Ảnh</label>
                        <input type="file" class="form-control" id="newsImage">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="saveNews">Lưu</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const news = [
    { id: 1, name: "Tin tức 1", title: "Tiêu đề 1", content: "Nội dung chi tiết 1", image: "https://via.placeholder.com/150", date: "2024-12-01" },
    { id: 2, name: "Tin tức 2", title: "Tiêu đề 2", content: "Nội dung chi tiết 2", image: "https://via.placeholder.com/150", date: "2024-12-02" }
];

function renderNewsList() {
    const newsList = document.getElementById('news-list');
    newsList.innerHTML = '';
    news.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.name}</td>
            <td>${item.title}</td>
            <td>${item.content}</td>
            <td><img src="${item.image}" alt="News Image" width="50"></td>
            <td>${item.date}</td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editNews(${item.id})">Sửa</button>
                <button class="btn btn-danger btn-sm" onclick="deleteNews(${item.id})">Xoá</button>
            </td>
        `;
        newsList.appendChild(row);
    });
}

function addNews() {
    const newNews = {
        id: news.length + 1,
        name: document.getElementById('newsName').value,
        title: document.getElementById('newsTitle').value,
        content: document.getElementById('newsContent').value,
        image: document.getElementById('newsImage').files[0] ? URL.createObjectURL(document.getElementById('newsImage').files[0]) : "https://via.placeholder.com/150",
        date: new Date().toISOString().split('T')[0]
    };
    news.push(newNews);
    renderNewsList();
    $('#newsModal').modal('hide');
}

function editNews(id) {
    const item = news.find(n => n.id === id);
    document.getElementById('newsName').value = item.name;
    document.getElementById('newsTitle').value = item.title;
    document.getElementById('newsContent').value = item.content;
    document.getElementById('newsImage').value = '';
    document.getElementById('saveNews').onclick = () => saveEditedNews(id);
    $('#newsModal').modal('show');
}

function saveEditedNews(id) {
    const item = news.find(n => n.id === id);
    item.name = document.getElementById('newsName').value;
    item.title = document.getElementById('newsTitle').value;
    item.content = document.getElementById('newsContent').value;
    item.image = document.getElementById('newsImage').files[0] ? URL.createObjectURL(document.getElementById('newsImage').files[0]) : item.image;
    renderNewsList();
    $('#newsModal').modal('hide');
}

function deleteNews(id) {
    const index = news.findIndex(n => n.id === id);
    if (index !== -1) news.splice(index, 1);
    renderNewsList();
}

function searchNews() {
    const query = document.getElementById('search').value.toLowerCase();
    const filteredNews = news.filter(n => n.name.toLowerCase().includes(query));
    const newsList = document.getElementById('news-list');
    newsList.innerHTML = '';
    filteredNews.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.name}</td>
            <td>${item.title}</td>
            <td>${item.content}</td>
            <td><img src="${item.image}" alt="News Image" width="50"></td>
            <td>${item.date}</td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editNews(${item.id})">Sửa</button>
                <button class="btn btn-danger btn-sm" onclick="deleteNews(${item.id})">Xoá</button>
            </td>
        `;
        newsList.appendChild(row);
    });
}

document.getElementById('add-news').onclick = () => {
    document.getElementById('newsForm').reset();
    document.getElementById('saveNews').onclick = addNews;
    $('#newsModal').modal('show');
};

renderNewsList();
</script>

</body>
</html>
