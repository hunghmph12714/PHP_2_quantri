<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;


class CategoryController extends BaseController
{
    public function index()
    {
        $cates = Category::all();
        $cates->load('products');

        $this->render('admin.category.index', compact('cates'));
    }

    public function addForm()
    {
        $this->render('admin.category.add-form');
    }

    public function saveAdd()
    {
        $requestData = $_POST;
        // validate cate_name => 1 - không để trống | 2 - không đc trùng tên với các record khác
        $errors = [];
        if (strlen(trim($requestData['cate_name'])) <= 0) {
            $errors['cate_name'] = "Hãy nhập tên danh mục";
        } else if (Category::where('cate_name', trim($requestData['cate_name']))->count() > 0) {
            $errors['cate_name'] = "Tên danh mục đã tồn tại";
        }

        if (strlen(trim($requestData['desc'])) <= 0) {
            $errors['desc'] = "Hãy nhập mô tả";
        }

        if (count($errors) > 0) {

            $this->render('admin.category.add-form', compact('errors'));
            die;
        }
        if (!isset($requestData['show_menu'])) {
            $requestData['show_menu'] = null;
        }
        // dd($requestData);
        $model = new Category();
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'danh-muc');
    }

    public function editForm($id)
    {




        $cate = Category::find($id);
        // echo $cate;
        if (!$cate) {
            header('location: ' . BASE_URL . 'danh-muc');
            die;
        }

        $this->render('admin.category.edit-form', compact('cate'));
    }

    public function saveEdit($id)
    {
        $model = Category::find($id);
        $cate = Category::find($id);

        if (!$model) {
            header('location: ' . BASE_URL . 'danh-muc');
            die;
        }
        $requestData = $_POST;
        $errors = [];
        if (strlen(trim($requestData['cate_name'])) <= 0) {
            $errors['cate_name'] = "Hãy nhập tên danh mục";
        } else if (Category::where('cate_name', trim($requestData['cate_name']))->count() > 0) {
            $errors['cate_name'] = "Tên danh mục đã tồn tại";
        }

        if (strlen(trim($requestData['desc'])) <= 0) {
            $errors['desc'] = "Hãy nhập mô tả";
        }

        if (count($errors) > 0) {

            $this->render('admin.category.add-form', compact('errors', 'cate'));
            die;
        }
        if (!isset($requestData['show_menu'])) {
            $requestData['show_menu'] = null;
        }
        if (!isset($requestData['show_menu'])) {
            $requestData['show_menu'] = null;
        }
        // $model = new Category();
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'danh-muc');
    }
    // public function delete($id)
    // {
    //     $model = Category::find($id);
    //     $pros = Product::where('cate_id', '=', $id)->get();
    //     foreach ($pros as $key => $value) {
    //         $value->delete();
    //     }
    //     $model->delete();
    //     header('location:' . BASE_URL . 'danh-muc');
    //     die;
    // }
    public function remove($id)
    {
        $model = Category::find($id);
        if (!$model) {
            header('location: ' . BASE_URL . 'danh-muc');
            die;
        }
        $products = Product::where('cate_id', $id)->get();
        foreach ($products as $key => $item) {
            $item->delete();
        }
        $model->delete();
        header('location: ' . BASE_URL . 'danh-muc');
    }
}
