<?php
require_once 'dbConnect.php';
class DataNews
{
    //lấy dữ liệu SP
    //thêm tin tuc
    //sửa tin tuc
    //xóa tin tuc
    //tìm kiếm tin tuc
    private $conn;

    // Constructor để khởi tạo kết nối cơ sở dữ liệu
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    // Lấy dữ liệu tất cả tin tức
    public function getAllNews()
    {
        $sql = "select news.id,name,title,content,image from news 
                inner join categories on categories.id = news.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm tin tức
    public function addNews($title, $content, $image)
    {
        $sql = "INSERT INTO news (title, content, image, created_at, category_id) VALUES (:title, :content, :image, NOW(), :categoryId)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image);
        return $stmt->execute();
    }

    // Sửa tin tức
    public function updateNews($id, $title, $content, $image, $categoryId)
    {
        $sql = "UPDATE news SET title = :title, content = :content, image = :image, category_id = :categoryId WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':categoryId', $categoryId);
        return $stmt->execute();
    }

    // Xóa tin tức
    public function deleteNews($id)
    {
        $sql = "DELETE FROM news WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Tìm kiếm tin tức
    public function searchNews($keyword)
    {
        $sql = "SELECT * FROM news WHERE title LIKE :keyword OR content LIKE :keyword";
        $stmt = $this->conn->prepare($sql);
        $likeKeyword = "%$keyword%";
        $stmt->bindParam(':keyword', $likeKeyword);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Lấy thông tin tin tức theo ID
    public function getNewsById($id)
    {
        $sql = "SELECT * FROM news WHERE id = :id"; // Truy vấn tìm tin tức theo id
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id); // Liên kết id với tham số trong câu lệnh SQL
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về kết quả dưới dạng mảng kết hợp
    }
}
