@extends('layouts.main')
@section('content')

      <form action="" method="POST" enctype="multipart/form-data">


<div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" id="cate_form">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control">
                    @if(isset($errors) && isset($errors['name']))
                        <span class="has-error text-danger">{{$errors['name']}}</span>
                    @endif
                </div> <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control">
                    @if(isset($errors) && isset($errors['price']))
                        <span class="has-error text-danger">{{$errors['price']}}</span>
                    @endif
                </div> <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control">
                    {{-- @if(isset($errors) && isset($errors['cate_name']))
                        <span class="has-error text-danger">{{$errors['cate_name']}}</span>
                    @endif --}}
                {{-- </div> <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="cate_name" class="form-control"> --}}
                    {{-- @if(isset($errors) && isset($errors['cate_name']))
                        <span class="has-error text-danger">{{$errors['cate_name']}}</span>
                    @endif --}}
                </div> <div class="form-group">    
                   <label for="">Tên danh mục</label>

                      <select name="cate_id" class="form-control">
                    @foreach ($cates as $item)
                        <option value="{{$item->id}}">{{$item->cate_name}}</option>
                    @endforeach
                </select>
                          
                                           
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea name="detail" class="form-control" rows="10"></textarea>
                                        @if(isset($errors) && isset($errors['detail']))
                        <span class="has-error text-danger">{{$errors['detail']}}</span>
                    @endif
                </div>
                <div class="text-right">
                    <a href="{{BASE_URL . 'products'}}" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>


        {{-- <div class="row">
            <div class="col-6">
            <div class="form-group">
                                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control">
                </div>
                                <div class="form-group">
                    <label for=""> Giá</label>
                    <input type="number" name="price" class="form-control">
                </div>
                                <div class="form-group">
                    <label for="">ảnh</label>
                    <input type="file" name="image" class="form-control">
                </div>
                                <div class="form-group">
                    <label for="">detail</label>
                    <input type="text" name="detail" class="form-control">
                </div>            
                <label for="">Danh mục</label>
                <select name="cate_id" class="form-control">
                    @foreach ($cates as $item)
                        <option value="{{$item->id}}">{{$item->cate_name}}</option>
                    @endforeach
                </select>
            </div>    <button type="submit">thêm</button>       

        </div>
    </div> --}}

{{-- </form> --}}

@endsection