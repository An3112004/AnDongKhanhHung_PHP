<?php
class User{
    //Đồng
    // lưu ý : làm cả hàm getter , setter , constructor có tham số

    private $name;
    private $email;
    private $password;
    private $role;

    public function __construct($name, $email, $password , $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $$role;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}