<?php 
require_once "models/product.php";
    function listProduct(){
         // gọi models 
         $products = getProduct(); // trả về 1 mảng dữ liệu từ trên cơ dữ liệu
        //  echo "<pre>";
        //  var_dump($products);die;
        include_once "views/product/listProduct.php";
        
       // return "Danh sách sản phẩm";
       
    }
    function hello(){
        return " xin chào bạn";
    }
    function removeProduct(){
        deleteProduct();
        header("location: ?url=/");
    }function moreProduct(){
        addProduct();
        header("location: ?url=/");

    }
?>