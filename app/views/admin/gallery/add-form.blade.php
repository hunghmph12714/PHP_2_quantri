@extends('layouts.main')
@section('content')

      <form action="" method="POST" enctype="multipart/form-data">


<div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" id="cate_form" enctype="multipart/form-data">
                
                 <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" multiple name="image[]" class="form-control">
                   
                </div> 
                <div class="form-group">    
                   <label for="">Ten san pham</label>
                      <select name="product_id" class="form-control">
                    @foreach ($pro as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                                           
               
                <div class="text-right">
                    <a href="{{BASE_URL . 'products'}}" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>    </div>



   

@endsection