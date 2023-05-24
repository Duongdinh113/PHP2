<?php
    // file index sẽ điều hướng người dùng vào Controller tương ứng
    $url = isset($_GET['url']) == true ? $_GET['url']:"/";
    
    // Sủ dụng switch case để điều hướng url
    switch($url){
        case  '/';
        require_once 'controller/productController.php';
        echo listproduct();
        echo "<pre>";
       
    // case 'xinChao':
    //     require_once 'controller/productController.php';
    //     echo hello();
    break;
        case 'remove-product';
            require_once 'controller/productController.php';
            echo removeProduct();
        break;
        case 'more-product';
        require_once 'controller/productController.php';
            echo moreProduct();
        break;
        case 'update.php';
           
        break;
       default:
       echo "đường dẫn không tồn tại";

    }
?>