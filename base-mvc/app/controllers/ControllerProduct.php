<?php
    namespace App\Controllers;
    use App\Models\Product;
    class ControllerProduct extends BaseController{
        public $product; // tạo thuộc tính
        public function __construct()
        {
            $this->product = new Product();
            
        }
        public function index(){
            $products = $this->product->getProduct(); // đón giá trị từ model trả về
            // echo "<pre>";
            // var_dump($products);
            return $this->render('product.index', compact('products')); // ['ten'=>$products]
            // die;
        }
        // public function EditAdd($id,$haha){
        //     return $this->render('product.editAdd'); // ['ten'=>$products]
        // }
    }
    
?>