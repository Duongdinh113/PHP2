<?php 
    namespace App\Controllers;
    use App\Models\Cart;
    class CartController extends BaseController{
        public $cart;
        public function __construct()
        {
            $this->cart = new Cart();
        }
        public function index(){
            // echo 123;die;
            // if(isset($_SESSION['status'])){
            //     unset($_SESSION['status']);
            // }
            $carts = $this->cart->list();
            return $this->render('cart.index',compact('carts'));
        }
        public function order($id){
            // echo 123;die;
            if(isset($_POST['btn'])){
                if($_POST['dxl'] == "đang xử lí"){
                    $result = $this->cart->order($id,$_POST['tc']);
                    if($result){
                        $_SESSION['status'] = "đơn đã được xác nhận";
                        header('location:'.BASE_URL.'list-cart');die;
                    }
                }else{
                     unset($_SESSION['status']);
                    header('location:'.BASE_URL.'list-cart');
                }
            }
        }
    }
?>