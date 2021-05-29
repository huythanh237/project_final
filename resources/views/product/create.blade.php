@extends('admin.app')
@section('create-product')
    <form action="{{route('create-pro')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nhập Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Nhập tên sản phẩm...">
            @error('product_name')<div class="alert alert-danger"> {{$message}} </div>@enderror
        </div>
        <div class="form-group">
            <label for="code">Mô Tả Sản Phẩm</label>
            <input type="text" class="form-control" id="product_descip" name="product_descrip" placeholder="Nhập mô tả...">
            @error('product_descrip')<div class="alert alert-danger"> {{$message}} </div>@enderror
        </div>
        <div class="form-group">
            <label for="code">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" id="product_images" name="product_images">
        </div>
        <div class="form-group">
            <label for="code">Nhập Giá Sản Phẩm</label>
            <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Nhập giá...">
            @error('product_price')<div class="alert alert-danger"> {{$message}} </div>@enderror
        </div>
        <div class="form-group">
            <label for="categories">Chọn Danh Mục Sản Phẩm</label>

            <select class="form-control" name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="brands">Chọn Thương Hiệu Sản Phẩm</label>
            <select class="form-control input-group-sm m-bot-15" name="brand" id="brand">
                @foreach($brands as $brand)
                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
