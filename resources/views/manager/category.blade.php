@extends('admin.app')
@section('category1')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Danh Mục</th>
            <th scope="col">Mã Danh Mục</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->code}}</td>
            <td><a class="btn btn-warning" href="">Sửa</a></td>
            <td><button type="button" class="btn btn-danger delete-post" data-id="{{ $category->id }}">Xóa</button></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
