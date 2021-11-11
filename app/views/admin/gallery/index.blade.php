@extends('layouts.main')
{{-- @section('title', 'Danh sách danh mục') --}}
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table class="table table-stripped">
                    <thead>
                        <th>ID</th>
                        <th>Tên Sản phẩm</th>
                        
                        <th> Ảnh anhr ph</th>
                        {{-- <th>
                            <a href="{{BASE_URL . 'products/add'}}" class="btn btn-sm btn-success">Tạo mới</a>
                        </th> --}}
                    </thead>
                    <tbody>
                        @foreach ($pro as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->products->name}}</td>
                               
                                <td><img width="100px" src="{{$item->image}}" alt=""></td>
                                {{-- <td>{{$item->views}}</td> --}}

                                
                                <td>
                                    <a href="{{BASE_URL . 'product/edit-product/'.$item->id}}" class="btn btn-sm btn-primary">Sửa</a>
                                    <a href="{{BASE_URL . 'product/delete/'.$item->id}}" onclick="return confirm('bạn có chắc muốn xóa??')" class="btn btn-sm btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection