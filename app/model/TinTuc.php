<?php
class SanPham{
    //Đồng
    private $id;
    private $name_prodoct;
    private $price_product;
    private $desc_product;
    private $image;

    //phuong thuc khoi tao 
    public function __construct($id,$name_prodoct,$price_product,$desc_product,$image)
    {
        $this->id = $id;
        $this->name_prodoct = $name_prodoct;
        $this->price_product = $name_prodoct;
        $this->desc_product = $desc_product;
        $this->image = $image;
    }
     // Getter và Setter cho id
     public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    // Getter và Setter cho name_product
    public function getNameProduct() {
        return $this->name_prodoct;
    }
    public function setNameProduct($name_product) {
        $this->name_prodoct = $name_product;
    }

    // Getter và Setter cho price_product
    public function getPriceProduct() {
        return $this->price_product;
    }
    public function setPriceProduct($price_product) {
        $this->price_product = $price_product;
    }

    // Getter và Setter cho desc_product
    public function getDescProduct() {
        return $this->desc_product;
    }
    public function setDescProduct($desc_product) {
        $this->desc_product = $desc_product;
    }

    // Getter và Setter cho image
    public function getImage() {
        return $this->image;
    }
    public function setImage($image) {
        $this->image = $image;
    }
}