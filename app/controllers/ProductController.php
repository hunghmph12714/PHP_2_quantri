<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class ProductController extends BaseController
{
    public function detail()
    {
        echo "detail";
    }

    public function index()
    {
        $pro = Product::all();
        $pro->load('category');

        // var_dump($cates);
        // die;
        // $cate = Category::where('id', '=', '$pro.cate');
        $this->render('admin.product.index', compact('pro'));
    }


    public function addForm()
    {
        $cates = Category::all();
        $this->render("admin.product.add-product", compact('cates'));
        // $this->render("admin.product.edit-product", compact('cates'));
    }





    public function saveProduct()
    {
        $cates = Category::all();
        // $pro = Product::find($id);


        $data = $_POST;
        $errors = [];
        if (strlen(trim($data['name'])) <= 0) {
            $errors['name'] = "Hãy nhập tên sp";
        } else if (Product::where('name', trim($data['name']))->count() > 0) {
            $errors['name'] = "Tên sản phẩm đã tồn tại";
        }
        if (strlen(trim($data['price'])) <= 0) {
            $errors['price'] = "Hãy nhập giá";
        } elseif ($data['price'] <= 0) {
            $errors['price'] = "Giá phải lớn hơn 0";
        }
        if (strlen(trim($data['detail'])) <= 0) {
            $errors['detail'] = "Hãy nhập chi tiết";
        }
        if (count($errors) > 0) {

            $this->render('admin.product.add-product', compact('errors', 'cates'));
            die;
        }
        // if (strlen($data['desc']) <= 0) {
        //     $errors['desc'] = "Hãy nhập mô tả";
        // }
        $files = $_FILES['image'];
        // dd($files);
        $names = $files['name'];
        $tmp_names = $files['tmp_name'];
        // $imgs = [];
        // foreach ($names as $index => $imgName) {
        $filename = 'public/uploads/' . uniqid() . '-' . $files['name'];
        move_uploaded_file($tmp_names, './' . $filename);
        // $imgs[] = $filename;
        // }
        // $data = $files;
        $model = new Product();
        $data['image'] = $filename;
        $model->fill($data);
        $model->save();
        // dd($imgs);
        // $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
        // move_uploaded_file($file['tmp_name'], './' . $filename);
        // dd($filename);
        header('location:' . BASE_URL . 'products');
    }

    // public function uploadForm()
    // {
    //     $this->render('admin.product.upload-form');
    // }



    public function editProduct($id)
    {
        $pro = Product::find($id);
        $cates = Category::all();
        // echo $cate;
        if (!$pro) {
            header('location: ' . BASE_URL . 'products');
            die;
        }

        $this->render('admin.product.edit-product', compact('pro', 'cates'));
    }
    public function updateProduct($id)
    {
        $pro = Product::find($id);
        $requestData = $_POST;
        $errors = [];
        $cates = Category::all();


        if (strlen(trim($requestData['name'])) <= 0) {
            $errors['name'] = "Hãy nhập tên sp";
        }
        if (strlen(trim($requestData['price'])) <= 0) {
            $errors['price'] = "Hãy nhập giá";
        } elseif ($requestData['price'] <= 0) {
            $errors['price'] = "Giá phải lớn hơn 0";
        }
        if (
            strlen(trim($requestData['detail'])) <= 0
        ) {
            $errors['detail'] = "Hãy nhập chi tiết";
        }
        if (count($errors) > 0) {

            $this->render('admin.product.add-product', compact('errors', 'cates', 'pro'));
            die;
        }
        $model = Product::find($id);
        // // dd($requestData);
        // dd($model);
        if (!$model) {
            header('location:' . BASE_URL . 'products');
            die;
        }
        $file = $_FILES['image'];
        $name = $file['name'];
        $tmp_name = $file['tmp_name'];
        $filename =
            'public/uploads/' . uniqid() . '-' . $name;
        move_uploaded_file($tmp_name, './' . $filename);
        if ($file['size'] <= 0) {
            $model->image->$filename;
            // $model['image']->$filename;
        } else {
            $requestData['image'] = $filename;
        }
        $model->fill($requestData);
        $model->save();
        header('location:' . BASE_URL . 'products');
    }



    public function remove($id)
    {

        $model = Product::find($id);
        $model->delete();
        header('location:' . BASE_URL . 'products');
        die;
    }
}
