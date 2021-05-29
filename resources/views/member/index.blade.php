@extends('admin.app')
@section('show-member')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Người Dùng</th>
            <th scope="col">Email</th>
            <th scope="col">Avatar</th>
            <th scope="col">Quyền</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><img style="height: 45px;width: 45px" src="{{$user->avatar}}"></td>
                <td>{{$user->role}}</td>
                <td><a onclick="return confirm('Bạn có chắc chắc muốn xóa sản phẩm này không?')" class="btn btn-danger" href="{{route('del-member', $user->id)}}">Xóa</a></td>            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-start p-0">
        <a class="btn btn-primary" href="{{ $users->previousPageUrl() }}">Previous Pages &rarr;</a>
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary" href="{{ $users->nextPageUrl() }}">Older Pages &rarr;</a>
    </div>
@endsection

