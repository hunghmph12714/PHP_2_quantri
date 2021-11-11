@extends('layouts.main')
{{-- @section('title', 'Thêm danh mục') --}}
@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" id="cate_form">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="cate_name" class="form-control">
                    @if(isset($errors) && isset($errors['cate_name']))
                        <span class="has-error text-danger">{{$errors['cate_name']}}</span>
                    @endif
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="1" name="show_menu" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị ở menu</label>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="desc" class="form-control" rows="10"></textarea>
                                        @if(isset($errors) && isset($errors['desc']))
                        <span class="has-error text-danger">{{$errors['desc']}}</span>
                    @endif
                </div>
                <div class="text-right">
                    <a href="{{BASE_URL . 'danh-muc'}}" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
   @endsection
@section('page-script')
{{-- <script>
    $(document).ready(function(){
        $('#cate-form').validate({
            ruler:{
                cate_name:{
                require:true
            },
            desc:{
                require:true
            }
            },
            messages:{
                cate_name:{
                    require:'Nhap ten danh muc'
                },
                remote:{
                    url:`{{BASE_URL}}danhmuc/checkname`,
                    type:"post";
                    data:{
                        cate_name:function(){
                            return $(`name="care_name"`);
                        }
                    }
                }
                desc:{
                    require:"Nhap mo ta"
                }
            }
        })


    })
</script> --}}
    
@endsection