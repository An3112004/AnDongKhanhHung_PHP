<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Custom styles for the page -->
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
        #add-product {
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
    <h1>Quản lý sản phẩm</h1>
    
    <!-- Search Bar -->
    <div class="mb-3">
        <input type="text" id="search" class="form-control" placeholder="Tìm kiếm sản phẩm..." oninput="searchProduct()">
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody id="product-list">
            <!-- Dynamic product rows will be injected here -->
        </tbody>
    </table>
    
    <!-- Button to add product -->
    <button id="add-product" class="btn btn-primary">Thêm sản phẩm</button>
</div>

<!-- Modal for adding/editing products -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Thêm sản phẩm mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="productForm">
                    <div class="mb-3">
                        <label for="ten" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="ten" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả sản phẩm</label>
                        <textarea class="form-control" id="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input type="text" class="form-control" id="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="saveProduct">Lưu</button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and custom script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Sample product data
const products = [
    { id: 1, name: "Sản phẩm 1", description: "Mô tả sản phẩm 1", price: "100.000 VND", image: "https://via.placeholder.com/150" },
    { id: 2, name: "Sản phẩm 2", description: "Mô tả sản phẩm 2", price: "200.000 VND", image: "https://via.placeholder.com/150" },
    { id: 3, name: "Sản phẩm 3", description: "Mô tả sản phẩm 3", price: "150.000 VND", image: "https://via.placeholder.com/150" },
];

// Function to render product list
function renderProductList() {
    const productList = document.getElementById('product-list');
    productList.innerHTML = ''; // Clear any existing rows

    products.forEach(product => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${product.name}</td>
            <td>${product.description}</td>
            <td>${product.price}</td>
            <td><img src="${product.image}" alt="Product Image" width="50px"></td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editProduct(${product.id})">Sửa</button>
                <button class="btn btn-danger btn-sm" onclick="deleteProduct(${product.id})">Xoá</button>
            </td>
        `;
        productList.appendChild(row);
    });
}

// Function to add product
function addProduct() {
    const newProduct = {
        id: products.length + 1,
        name: document.getElementById('ten').value,
        description: document.getElementById('description').value,
        price: document.getElementById('price').value,
        image: document.getElementById('image').files[0] ? URL.createObjectURL(document.getElementById('image').files[0]) : "https://via.placeholder.com/150"
    };
    products.push(newProduct);
    renderProductList();
    $('#productModal').modal('hide');
}

// Function to edit product
function editProduct(id) {
    const product = products.find(p => p.id === id);
    document.getElementById('ten').value = product.name;
    document.getElementById('description').value = product.description;
    document.getElementById('price').value = product.price;
    document.getElementById('image').value = ''; // Reset the image input

    document.getElementById('saveProduct').onclick = () => saveEditedProduct(id);
    $('#productModal').modal('show');
}

// Function to save edited product
function saveEditedProduct(id) {
    const product = products.find(p => p.id === id);
    product.name = document.getElementById('ten').value;
    product.description = document.getElementById('description').value;
    product.price = document.getElementById('price').value;
    product.image = document.getElementById('image').files[0] ? URL.createObjectURL(document.getElementById('image').files[0]) : product.image;
    
    renderProductList();
    $('#productModal').modal('hide');
}

// Function to delete product
function deleteProduct(id) {
    const productIndex = products.findIndex(p => p.id === id);
    if (productIndex !== -1) {
        products.splice(productIndex, 1);
        renderProductList();
    }
}

// Function to search products
function searchProduct() {
    const query = document.getElementById('search').value.toLowerCase();
    const filteredProducts = products.filter(product => product.name.toLowerCase().includes(query));
    const productList = document.getElementById('product-list');
    productList.innerHTML = '';  // Clear any existing rows

    filteredProducts.forEach(product => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${product.name}</td>
            <td>${product.description}</td>
            <td>${product.price}</td>
            <td><img src="${product.image}" alt="Product Image" width="50px"></td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editProduct(${product.id})">Sửa</button>
                <button class="btn btn-danger btn-sm" onclick="deleteProduct(${product.id})">Xoá</button>
            </td>
        `;
        productList.appendChild(row);
    });
}

// Initialize the product list
renderProductList();

// Add new product event
document.getElementById('add-product').onclick = () => {
    document.getElementById('productForm').reset();
    document.getElementById('saveProduct').onclick = addProduct;
    $('#productModal').modal('show');
};
</script>

</body>
</html>
