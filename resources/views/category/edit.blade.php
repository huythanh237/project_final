@extends('admin.app')
@section('edit-category')
    <form action="{{route('edit-cate', $category->category_id) }}" method="post">
        @csrf
        <input type="hidden" id="id" value="{{$category->category_id}}">
        <div class="form-group">
            <label for="name">Nhập Tên Danh Mục</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{$category->category_name}}">
            @error('name')<div class="alert alert-danger"> {{$message}} </div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection



