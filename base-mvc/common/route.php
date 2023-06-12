<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});
// tạo ra định nghĩa đường dẫn trỏ đên Product Controller


// bắt đầu định nghĩa ra các đường dẫn
//** */
$router->get('/', function(){
    return "trang chủ";
});
// category
$router->get('list-category',[App\Controllers\CategoriController::class,'index']);
$router->get('add-category',[App\Controllers\CategoriController::class,'addCategory']);
$router->post('post-category',[App\Controllers\CategoriController::class,'postCategory']);
$router->get('edit-category/{id}',[App\Controllers\CategoriController::class,'editCategory']);
$router->post('update-category/{id}',[App\Controllers\CategoriController::class,'updateCategory']);
$router->get('delete-category/{id}',[App\Controllers\CategoriController::class,'delete']);
// comment
$router->get('list-comment',[App\Controllers\CommentController::class,'index']);
$router->get('add-comment',[App\Controllers\CommentController::class,'addComment']);
$router->post('post-comment',[App\Controllers\CommentController::class,'postComment']);
$router->get('edit-comment/{id}',[App\Controllers\CommentController::class,'editComment']);
$router->post('update-comment/{id}',[App\Controllers\CommentController::class,'updateComment']);
$router->get('delete-comment/{id}',[App\Controllers\CommentController::class,'deleteComment']);
// product
$router->get('list-product',[App\Controllers\ControllerProduct::class,'index']);
$router->get('add-Product',[App\Controllers\ControllerProduct::class,'addProduct']);
$router->post('post-Product',[App\Controllers\ControllerProduct::class,'postProduct']);
$router->get('detail-product/{id}',[App\Controllers\ControllerProduct::class,'detail']);
$router->post('edit-product/{id}',[App\Controllers\ControllerProduct::class,'editProduct']);
$router->get('delete-product/{id}',[App\Controllers\ControllerProduct::class,'delete']);
// user
$router->get('list-user',[App\Controllers\UserController::class,'index']);
$router->get('add-user',[App\Controllers\UserController::class,'addUser']);
$router->post('post-user',[App\Controllers\UserController::class,'postUser']);
$router->get('edit-user/{id}',[App\Controllers\UserController::class,'edit']);
$router->post('update-user/{id}',[App\Controllers\UserController::class,'update']);
$router->get('delete-user/{id}',[App\Controllers\UserController::class,'delete']);
//cart
$router->get('list-cart',[App\Controllers\CartController::class,'index']);
$router->post('order-confirmation/{id}',[App\Controllers\CartController::class,'order']);

// $router->get('test', [App\Controllers\ProductController::class, 'index']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>