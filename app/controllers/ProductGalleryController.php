<?php

namespace App\Controllers;

use App\Models\ProductGallery;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class ProductGalleryController extends BaseController
{
    public function detail()
    {
        echo "detail";
    }

    public function index()
    {
        $pro = ProductGallery::all();
        $pro->load('products');

        // var_dump($cates);
        // die;
        // $cate = Category::where('id', '=', '$pro.cate');
        $this->render('admin.gallery.index', compact('pro'));
    }


    public function addForm()
    {
        $pro = Product::all();
        $this->render("admin.gallery.add-form", compact('pro'));
        // $this->render("admin.product.edit-product", compact('cates'));
    }





    public function saveProduct()
    {
        // $cates = Category::all();
        // // $pro = ProductGallery::find($id);


        $data = $_POST;
        // $errors = [];
        // if (strlen(trim($data['name'])) <= 0) {
        //     $errors['name'] = "Hãy nhập tên sp";
        // } else if (ProductGallery::where('name', trim($data['name']))->count() > 0) {
        //     $errors['name'] = "Tên sản phẩm đã tồn tại";
        // }
        // if (strlen(trim($data['price'])) <= 0) {
        //     $errors['price'] = "Hãy nhập giá";
        // } elseif ($data['price'] <= 0) {
        //     $errors['price'] = "Giá phải lớn hơn 0";
        // }
        // if (strlen(trim($data['detail'])) <= 0) {
        //     $errors['detail'] = "Hãy nhập chi tiết";
        // }
        // if (count($errors) > 0) {

        //     $this->render('admin.product.add-product', compact('errors', 'cates'));
        //     die;
        // }
        // if (strlen($data['desc']) <= 0) {
        //     $errors['desc'] = "Hãy nhập mô tả";
        // }
        $files = $_FILES['image'];
        // dd($files);
        $names = $files['name'];
        $tmp_names = $files['tmp_name'];
        $imgs = [];
        foreach ($names as $index => $imgName) {
            $filename = 'public/uploads/' . uniqid() . '-' . $imgName;
            move_uploaded_file($tmp_names[$index], './' . $filename);
            $imgs[] = $filename;
            $data['image'] = $filename;
            $model = new ProductGallery();

            $model->fill($data);
            $model->save();
            // dd($imgs);
            // $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
            // move_uploaded_file($file['tmp_name'], './' . $filename);
            // dd($filename);
            header('location:' . BASE_URL . 'products');
        }

        // dd($imgs);
        // $data = $files;

    }

    // public function uploadForm()
    // {
    //     $this->render('admin.product.upload-form');
    // }



    public function editProduct($id)
    {
        $pro = ProductGallery::find($id);
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
        $data = $_POST;
        $pro = ProductGallery::find($id);

        $errors = [];
        $cates = Category::all();
        $pro = ProductGallery::find($id);


        if (strlen(trim($data['name'])) <= 0) {
            $errors['name'] = "Hãy nhập tên sp";
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

            $this->render('admin.product.add-product', compact('errors', 'cates', 'pro'));
            die;
        }
        $model = ProductGallery::find($id);
        $model->fill($data);
        $model->save();
        header("location:" . BASE_URL . "products");
    }



    public function remove($id)
    {

        $model = ProductGallery::find($id);
        $model->delete();
        header('location:' . BASE_URL . 'products');
        die;
    }
}
