<?php
require_once 'dbConnect.php';
class DataCaTefory{
    private $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function addCategory($ten)
    {
        $sql = "insert into categories(name) value (:name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $ten);
        return $stmt->execute();
    }

    
}
?>