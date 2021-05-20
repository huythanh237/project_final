@extends('admin.app')
@section('product1')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Mã Sản Phẩm</th>
            <th scope="col">Ảnh Sản Phẩm</th>
            <th scope="col">Số Lượng Sản Phẩm</th>
            <th scope="col">Giá Sản Phẩm</th>
            <th scope="col">Thương Hiệu Sản Phẩm</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->code}}</td>
                <td><img src="{{$product->images}}"></td>
                <td>{{$product->amount}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->brand_id}}</td>
                <td><a class="btn btn-warning" href="">Sửa</a></td>
                <td><button type="button" class="btn btn-danger delete-post" data-id="{{ $product->id }}">Xóa</button></td
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

