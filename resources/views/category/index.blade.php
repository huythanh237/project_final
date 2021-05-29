@extends('admin.app')
@section('show-category')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Danh Mục</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->category_id}}</th>
                <td>{{$category->category_name}}</td>
                <td><a class="btn btn-warning" href="{{route('form-edit-cate', $category->category_id)}}">Sửa</a></td>
                <td><a onclick="return confirm('Bạn có chắc chắc muốn xóa danh mục này không?')" class="btn btn-danger delete-post" href="{{route('del-cate', $category->category_id)}}">Xóa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
