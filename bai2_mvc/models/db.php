<?php
require_once "env.php";
class db {
// tạo kết nối từ project php sang mysql
    public $connect;
    public function __construct()
    {
        $this->connect = $this->getConnect();
    }
    public function getConnect(){
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }
    //  nếu getAll = true thì sẽ thực hiện truy vấn lấy dữ liệu
    //  nếu getAll = false thì sẽ thực hiện thêm, sửa, xóa dữ liệu
    public function getData($query, $getAll = true){
        $conn = $this->getConnect();

        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($getAll){
            return $stmt->fetchAll();
        }

        return $stmt->fetch();
    }
} 
?>