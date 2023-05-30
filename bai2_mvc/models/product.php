<?php
    require_once "models/db.php";
    class Product{
    // xây dựng hàm truy vấn lấy danh sách product
     function getProduct(){
        $db = new db();
        // $sql = "SELECT * FROM product";
        $sql = "SELECT * FROM product ORDER BY id DESC";
        return $db->getData($sql); // không truyền giá trị false vào thì mặc định là true
       
    }
    function deleteProduct(){
        // $delete = new delete();
        $db = new db();
        $id = $_GET['id'];
        $sql = "DELETE FROM product WHERE id = $id";
        $db->getData($sql, false);
    } function addProduct(){
        $db = new db();
        $tenSP = $_POST['ten'];
        $giaSP = $_POST['gia'];
        $sql = "INSERT INTO `product`(`ten_sp`, `gia`) VALUES ('$tenSP','$giaSP')";
        //   var_dump($sql);die;
        $db->getData($sql, false);
    }
    function find($id){
        $sql = "SELECT * FROM product WHERE id = $id";
        $db = new db();
        return $db->getData($sql,false);
    }
    function update(){
        $db= new db();
        $id = $_POST['id'];
        $tenSP = $_POST['ten'];
        $gia = $_POST['gia'];
        $sql = "UPDATE `product` SET `ten_sp`='$tenSP',`gia`='$gia' WHERE id=$id";
      
        return $db->getData($sql,false);
    }
    
}
?>