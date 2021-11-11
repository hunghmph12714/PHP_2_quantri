<?php

use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\LoginController;
use App\Controllers\ProductGalleryController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";

$router = new RouteCollector();
$router->filter('auth', function () {
    if (!isset($_SESSION['AUTH']) || empty($_SESSION['AUTH'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});
$router->group(['before' => 'auth'], function ($router) {
    $router->get('/', [HomeController::class, 'index']);
    $router->get('danh-muc', [CategoryController::class, 'index']);
    $router->get('danh-muc/delete/{id}', [CategoryController::class, 'remove']);


    $router->get('products', [ProductController::class, 'index']);
    $router->get('products/add', [ProductController::class, 'addForm']);
    $router->post('products/add', [ProductController::class, 'saveProduct']);
    $router->post('products/delete/{id}', [ProductController::class, 'remove']);

    $router->get('product/edit-product/{id}', [ProductController::class, 'editProduct']);
    $router->post('product/edit-product/{id}', [ProductController::class, 'updateProduct']);

    $router->get('gallery', [ProductGalleryController::class, 'index']);
    $router->get('gallery/add', [ProductGalleryController::class, 'addForm']);
    $router->post('gallery/add', [ProductGalleryController::class, 'saveProduct']);
    $router->post('gallery/delete/{id}', [ProductGalleryController::class, 'remove']);

    // $router->get('product/edit-product/{id}', [ProductGalleryController::class, 'editProduct']);
    // $router->post('product/edit-product/{id}', [ProductGalleryController::class, 'updateProduct']);





    // $router->get('products/add', [ProductController::class, 'index']);


    $router->get('product/delete/{id}', [ProductController::class, 'remove']);


    $router->get('danh-muc/add', [CategoryController::class, 'addForm']);
    $router->post('danh-muc/add', [CategoryController::class, 'saveAdd']);
    $router->get('danh-muc/edit/{id}', [CategoryController::class, 'editForm']);
    $router->post('danh-muc/edit/{id}', [CategoryController::class, 'saveEdit']);
    $router->post(
        'danh-muc/check-name',
        [CategoryController::class, 'checkNameExisted']
    );
});
$router->get('login', [LoginController::class, 'loginForm']);
$router->post('login', [LoginController::class, 'postLogin']);
$router->any('logout', [LoginController::class, 'logout']);

// $router->get('demo-upload', [ProductController::class, 'uploadForm']);
// $router->post('demo-upload', [ProductController::class, 'saveImage']);
// $router->get('san-pham/add', [ProductController::class, 'addForm']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
