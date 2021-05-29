@extends('admin.app')
@section('title', 'Admin | Thêm Danh Mục Sản Phẩm')
@section('create-category')
    <form action="{{route('create-cate')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nhập Tên Danh Mục</label>
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter danh mục...">
            @error('category_name')<div class="alert alert-danger"> {{$message}} </div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


