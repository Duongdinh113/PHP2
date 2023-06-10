<?php
    namespace App\Controllers;
    use App\Models\Categori;
    class CategoriController extends BaseController{
        public $categori;
        public function __construct()
        {
            $this->categori = new Categori();
        }
        public function index(){
            $categoris = $this->categori->getCategori(); // đón giá trị từ model trả về
            // var_dump($categoris);
            // die;
            // echo "<pre>";
    
            return $this->render('categori.index', compact('categoris')); // ['ten'=>$products]
        }
         public function addCategory(){
            return $this->render('categori.add');
            // echo 123;
            
         }  
        
         public function postCategory(){
            if(isset($_POST['btn'])) {
                 //validate
                        // tạo ra 1 mảng lỗi error
                        $errors = [];
                        // nếu như bỏ trống tên SP
                      
                        // nếu như bỏ trống đơn giá
                        if (empty($_POST['name'])) {
                            $errors[] = "Bạn không được bỏ trống ten loai";
                        }
                        if (count($errors) > 0 ) { // có lỗi
                            //push mảng lỗi này vào trong session
            //                $_SESSION['errors'] = $errors;
            //                // nhảy về trang add-product
            //                header('location:'.BASE_URL.'add-product');die;
                            redirect('errors',$errors,'add-category');
                        } else {
            $result = $this->categori->addCategory(NULL,$_POST['name']);
            if($result){
                // redirect('success',"Thêm sản phẩm thành công",'add-category');
                // header('location:'.BASE_URL.'add-categoryd');die;
                redirect('success',"Thêm sản phẩm thành công",'add-category');
                    }
                }
            }
        }
        public function editCategory($id){
            // echo 123;
            $category = $this->categori->detailCategory($id);
            return $this->render('categori.edit',compact('category'));
        } 
        public function updateCategory($id){
            // echo 123;
            if(isset($_POST['btn'])){
            $result = $this->categori->updateCategory($id,$_POST['name']);
            if($result){
                redirect('success','sửa thành công','edit-category/'.$id);
            }
            }
        }
    }
?>