<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.02);
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-card h5 {
            font-size: 1.25rem;
            margin-top: 10px;
        }
        .product-card p {
            margin-bottom: 10px;
        }
        .price {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Danh Sách Sản Phẩm</h1>
    <div id="product-list" class="row">
        <!-- Các sản phẩm sẽ được hiển thị tại đây -->
    </div>
</div>

<script>
// Dữ liệu mẫu
const products = [
    { id: 1, name: "Sản phẩm 1", description: "Mô tả sản phẩm 1", price: "100.000 VND", image: "https://via.placeholder.com/150" },
    { id: 2, name: "Sản phẩm 2", description: "Mô tả sản phẩm 2", price: "200.000 VND", image: "https://via.placeholder.com/150" },
    { id: 3, name: "Sản phẩm 3", description: "Mô tả sản phẩm 3", price: "150.000 VND", image: "https://via.placeholder.com/150" },
    { id: 4, name: "Sản phẩm 4", description: "Mô tả sản phẩm 4", price: "250.000 VND", image: "https://via.placeholder.com/150" },
];

// Hiển thị danh sách sản phẩm
function renderProducts() {
    const productList = document.getElementById('product-list');
    productList.innerHTML = ''; // Xóa nội dung cũ

    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.className = 'col-md-4';
        productCard.innerHTML = `
            <div class="product-card" onclick="viewProduct(${product.id})">
                <img src="${product.image}" alt="${product.name}">
                <h5>${product.name}</h5>
                <p class="price">${product.price}</p>
            </div>
        `;
        productList.appendChild(productCard);
    });
}

// Chuyển đến trang chi tiết sản phẩm
function viewProduct(productId) {
    window.location.href = `chi_tiet_San_Pham.php?id=${productId}`;
}

// Khởi tạo danh sách sản phẩm
renderProducts();
</script>

</body>
</html>
