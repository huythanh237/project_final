@extends('admin.index')
@section('product')
    <form action="{{route('create-product')}}" method="post" multiple="">
        @csrf
        <div class="form-group">
            <label for="name">Nhập Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter danh muc...">
        </div>
        <div class="form-group">
            <label for="code">Nhập Mã Sản Phẩm</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Enter code...">
        </div>
        <div class="form-group">
            <label for="code">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" id="code" name="images" placeholder="Enter code...">
        </div>
        <div class="form-group">
            <label for="code">Nhập Số Lượng</label>
            <input type="number" class="form-control" id="code" name="amount" placeholder="Enter code...">
        </div>
        <div class="form-group">
            <label for="code">Nhập Giá Sản Phẩm</label>
            <input type="text" class="form-control" id="code" name="price" placeholder="Enter code...">
        </div>
        <div class="form-group">
            <label for="code">Nhập Thương Hiệu Sản Phẩm</label>
            <input type="text" class="form-control" id="code" name="brand_id" placeholder="Enter code...">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
