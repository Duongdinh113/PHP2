<?php
// echo phpinfo();
    // file index sẽ điều hướng người dùng vào Controller tương ứng
    $url = isset($_GET['url']) == true ? $_GET['url']:"/";
    
    // Sủ dụng switch case để điều hướng url
    switch($url){
        case  '/';
        require_once 'controller/productController.php';
        $productController = new productController();
        
        echo $productController->listproduct();
        echo "<pre>";
       
    // case 'xinChao':
    //     require_once 'controller/productController.php';
    //     echo hello();
    break;
      
        case 'more-product';
        require_once 'controller/productController.php';
        $more = new ProductController();
            echo $more->moreProduct();
        break;
        case 'edit-product';
        require_once 'controller/productController.php';
        $edit = new ProductController();
           echo $edit->editProduct();
        break;
        case 'update-product';
        require_once 'controller/productController.php';
        $update = new ProductController();
            echo $update->updateProduct();
        break;
        case 'remove-product';
        require_once 'controller/productController.php';
        $remove = new ProductController();
        echo $remove->removeProduct();
        break;
       default:
       echo "đường dẫn không tồn tại";

    }
?>