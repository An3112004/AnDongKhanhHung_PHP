<?php
require_once __DIR__ . './dbConnect.php';
require_once __DIR__ . './User.php';

class DataUser {
    private $conn;

    public function __construct(Database $database) {
        $this->conn = $database->getConnection();
    }

    // Lấy dữ liệu user bằng PDO
    public function getAllUser() {
        $sql = "SELECT * FROM img";
        $news = [];

        try {
            $stmt = $this->conn->prepare($sql); // Chuẩn bị câu lệnh SQL
            $stmt->execute(); // Thực thi câu lệnh
            $news = $stmt->fetchAll(PDO::FETCH_ASSOC); // Lấy tất cả dữ liệu dạng mảng kết hợp
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return $news;
    }
}
?>
