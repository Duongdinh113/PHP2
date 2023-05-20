<?php
    require_once "models/db.php";
    // xây dựng hàm truy vấn lấy danh sách product
    function getProduct(){
        $sql = "SELECT * FROM product";
        return getData($sql); // không truyền giá trị false vào thì mặc định là true
    }
    function deleteProduct(){
        $id = $_GET['id'];
        $sql = "DELETE FROM product WHERE id = $id";
        getData($sql, false);
    } function addProduct(){
        $tenSP = $_POST['ten'];
        $giaSP = $_POST['gia'];
        $sql = "INSERT INTO `product`(`ten_sp`, `gia`) VALUES ('$tenSP','$giaSP')";
        //   var_dump($sql);die;
        getData($sql, false);
    }
?>