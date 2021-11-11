@extends('layouts.main')'
@section('content')
   
    <h2>Danh sách sản phẩm</h2>
    {{-- {{var_dump($products)}} --}}
    <div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr;grid-gap: 10px">
    @foreach ($products as $pro)
        <div style="border: 1px solid #ccc; display: inline-block;">
<img src= '{{BASE_URL.$pro->image}}' width="100px" alt="">
            <h3>Sản phẩm: {{$pro->name}}</h3>
            <p>Giá: {{$pro->price}}</p>
            <p>Danh mục: {{$pro->category->cate_name}}</p>
        </div>
    @endforeach</div>
@endsection
