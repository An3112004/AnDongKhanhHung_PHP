<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .product-detail {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .product-detail img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .product-detail h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .product-detail p {
            margin-bottom: 10px;
        }
        .price {
            font-weight: bold;
            font-size: 1.5rem;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <div id="product-detail" class="product-detail">
        <!-- Chi tiết sản phẩm sẽ được hiển thị tại đây -->
    </div>
    <a href="index.html" class="btn btn-secondary mt-3">Quay lại danh sách sản phẩm</a>
</div>

<script>
// Dữ liệu mẫu (tương tự như trang danh sách sản phẩm)
const products = [
    { id: 1, name: "Sản phẩm 1", description: "Mô tả sản phẩm 1", price: "100.000 VND", image: "https://via.placeholder.com/150" },
    { id: 2, name: "Sản phẩm 2", description: "Mô tả sản phẩm 2", price: "200.000 VND", image: "https://via.placeholder.com/150" },
    { id: 3, name: "Sản phẩm 3", description: "Mô tả sản phẩm 3", price: "150.000 VND", image: "https://via.placeholder.com/150" },
    { id: 4, name: "Sản phẩm 4", description: "Mô tả sản phẩm 4", price: "250.000 VND", image: "https://via.placeholder.com/150" },
];

// Lấy ID sản phẩm từ URL
function getProductIdFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    return parseInt(urlParams.get('id'), 10);
}

// Hiển thị chi tiết sản phẩm
function renderProductDetail() {
    const productId = getProductIdFromURL();
    const product = products.find(p => p.id === productId);

    if (product) {
        const productDetail = document.getElementById('product-detail');
        productDetail.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h1>${product.name}</h1>
            <p>${product.description}</p>
            <p class="price">${product.price}</p>
        `;
    } else {
        document.getElementById('product-detail').innerHTML = '<p>Không tìm thấy sản phẩm.</p>';
    }
}

// Hiển thị thông tin chi tiết sản phẩm
renderProductDetail();
</script>

</body>
</html>
