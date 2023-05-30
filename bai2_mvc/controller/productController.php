<?php 
require_once "models/product.php";
class ProductController{
    function listProduct(){
         // gọi models 
         $product = new Product();
         $products = $product->getProduct(); // trả về 1 mảng dữ liệu từ trên cơ dữ liệu
        //  echo "<pre>";
        //  var_dump($products);die;
        include_once "views/product/listProduct.php";
        
       // return "Danh sách sản phẩm";
       
    }
    function removeProduct(){
        $delete = new Product();
        $delete->deleteProduct();
        header("location: ?url=/");
    }function moreProduct(){
        $add = new Product();
        $add->addProduct();
        header("location: ?url=/");

    }
    function editProduct(){
        $id = $_GET["id"];
        $edit = new Product();
        $products = $edit->find($id);
        include_once "views/product/update.php";
    }
    function updateProduct(){
        $update = new Product();
        $update->update();
        header("location: ?url=/");
    }
}
?>