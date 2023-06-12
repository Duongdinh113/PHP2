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
       
        }
        public function detail($id){
            $product = $this->product->editUpdate($id);
            return $this->render('product.edit',compact('product')); // ['ten'=>$products]

        }
        public function addProduct(){
            return $this->render('product.add');
        }
        public function postProduct() {
            //        echo 123;
                    // khi người dùng kích vào nút
                    if(isset($_POST['nut'])) {
                        // validate
                        // tạo ra 1 mảng lỗi error
                        $errors = [];
                        // nếu như bỏ trống tên SP
                        if (empty($_POST['ten_sp'])) {
                            $errors[] = "Bạn không được để trống tên sản phẩm";
                        }
                        // nếu như bỏ trống đơn giá
                        if (empty($_POST['don_gia'])) {
                            $errors[] = "Bạn không được bỏ trống đơn giá";
                        }
                        if (count($errors) > 0 ) { // có lỗi
                            //push mảng lỗi này vào trong session
            //                $_SESSION['errors'] = $errors;
            //                // nhảy về trang add-product
            //                header('location:'.BASE_URL.'add-product');die;
                            redirect('errors',$errors,'add-Product');
                        } else {
                            $result = $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['don_gia']);
                            if ($result)  {
            //                    $_SESSION['success'] = "Thêm sản phẩm thành công";
            //                    header('location:'.BASE_URL.'add-product');die;
                             redirect('success',"Thêm thành công",'add-Product');
                            }
                        }
                    }
         }
         public function editProduct($id){
            if(isset($_POST['nut'])){
                $result = $this->product->updeteProduct($id,$_POST['ten_sp'],$_POST['don_gia']);
              if($result){
                redirect('success',"Sửa sản phẩm thành công",'detail-product/'.$id);
              }
            }
        } 
        public function delete($id){
                $result = $this->product->deleteProduct($id);
              if($result){
                redirect('success',"xoa thanh cong",'list-product');
              }
            
        }
    }
?>