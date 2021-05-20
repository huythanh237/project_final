@extends('admin.index')
@section('category')
    <form action="{{route('create-category')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nhập Tên Danh Mục</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter danh muc...">
        </div>
        <div class="form-group">
            <label for="code">Nhập Mã Danh Mục</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Enter code...">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


