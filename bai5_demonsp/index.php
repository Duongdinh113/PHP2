<?php
include_once "models/Product.php";
include_once "models/Customer.php";
include_once "models/Category.php";
include_once "controllers/CustomerController.php";
include_once "controllers/ProductController.php";
use Models\Product;
use Models\Customer;
use Controllers\ProductController;
$product = new Product();
$customer = new Customer();
$productController = new ProductController();

// tạo 1 thư mục có tên là luyentapnsp
// trong thư mục luyentapnsp sẽ có 5 thư mục sau : bai1,bai2,bai3,bai4,bai5
// Trong mỗi thư mục sẽ tạo ra các file và chứa các class sau
//SinhVien, GiangVien,BacSy mỗi class đều có hàm khởi tạo hiển thị ra
// đây là class sinh viên
//hay đặt namespace sao cho phù hợp để việc gọi các class thuộc các thư mục không
// bị trùng nhau