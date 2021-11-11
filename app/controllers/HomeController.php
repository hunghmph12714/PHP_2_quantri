<?php

namespace App\Controllers;

use App\Models\Product;

class HomeController extends BaseController
{
    public function index()
    {
        // lấy ra & hiển thị danh sách các sản phẩm
        $products = Product::all();
        $products->load('category');

        $this->render('clients.homepage', compact('products'));
    }

    public function detail()
    {
        echo "HomeController => detail()";
    }
}
