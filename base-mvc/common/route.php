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
$router->get('list-product',[App\Controllers\ControllerProduct::class,'index']);
$router->get('list-category',[App\Controllers\CategoriController::class,'index']);
$router->get('list-comment',[App\Controllers\CommentController::class,'index']);
$router->get('detail-product/{id}/{haha}',[App\Controllers\Controller1::class,'detail']);


// $router->get('test', [App\Controllers\ProductController::class, 'index']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>