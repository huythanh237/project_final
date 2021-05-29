@extends('admin.app')
@section('show-product')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Mô Tả Sản Phẩm</th>
            <th scope="col">Giá Sản Phẩm</th>
            <th scope="col">Ảnh Sản Phẩm</th>
            <th scope="col">Danh Mục Sản Phẩm</th>
            <th scope="col">Thương Hiệu Sản Phẩm</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->product_id}}</th>
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_descrip}}</td>
                <td>{{$product->product_price}}</td>
                <td><img style="width: 45px; height: 45px" src="{{$product->product_images}}"></td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->brand_id}}</td>
                <td><a class="btn btn-warning" href="{{route('form-edit-pro', $product->product_id)}}">Sửa</a></td>
                <td><a onclick="return confirm('Bạn có chắc chắc muốn xóa sản phẩm này không?')" class="btn btn-danger" href="{{route('del-pro', $product->product_id)}}">Xóa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-start p-0">
        <a class="btn btn-primary" href="{{ $products->previousPageUrl() }}">Previous Pages &rarr;</a>
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{ $products->nextPageUrl() }}">Older Pages &rarr;</a>
    </div>
@endsection

