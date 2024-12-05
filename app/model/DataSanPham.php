<?php
require_once 'dbConnect.php';
class DataSanPham{
    //lấy dữ liệu SP
    //thêm SP
    //sửa SP
    //xóa SP
    //tìm kiếm SP
    private $conn;
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // lay danh sach tu du lieu
    public function getAllProduct(){
        $query = "select * from product";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //tra ve mang
    }

    //them sp moi 
    public function addProduct($name_product,$price_product,$desc_product, $image){
        $query = "INSERT INTO product (name_product, price_product, desc_product, image) 
                  VALUES (:name, :price, :desc, :image)";
    }

}