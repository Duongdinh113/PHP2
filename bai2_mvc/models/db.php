<?php
// tạo kết nối từ project php sang mysql
require_once "env.php";
function getConnect(){
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
function getData($query, $getAll = true){
    $conn = getConnect();

    $stmt = $conn->prepare($query);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }

    return $stmt->fetch();
}
?>