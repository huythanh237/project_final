@extends('admin.app')
@section('edit-product')
    <form action="{{route('edit-pro', $product->product_id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" value="{{$product->product_id}}">
        <div class="form-group">
            <label for="name">Nhập Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{$product->product_name}}">
            @error('name')<div class="alert alert-danger"> {{$message}} </div>@enderror
        </div>
        <div class="form-group">
            <label for="code">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" id="product_images" name="product_images">
        </div>
        <div class="form-group">
            <label for="code">Nhập Giá Sản Phẩm</label>
            <input type="text" class="form-control" id="product_price" name="product_price" value="{{$product->product_price}}">
            @error('price')<div class="alert alert-danger"> {{$message}} </div>@enderror
        </div>
        <div class="form-group">
            <label for="categories">Chọn Danh Mục Sản Phẩm</label>

            <select class="form-control" name="categories" id="categories">
                @foreach($categories as $category)
                    <option value="{{$category->category_id}}"
                        {{ $product->categories->contains($category) ? 'selected' : ''}}
                    >{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="brands">Chọn Danh Mục Sản Phẩm</label>

            <select class="form-control" name="brands" id="brand">
                @foreach($brands as $brand)
                    <option value="{{$brand->brand_id}}"
                        {{ $product->brands->contains($brand) ? 'selected' : ''}}
                    >{{$brand->brand_name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

