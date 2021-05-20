@extends('admin.app')
@section('member')
    <div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Người Dùng</th>
            <th scope="col">Email</th>
            <th scope="col">Avatar</th>
            <th scope="col">Quyền</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td scope="row">{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><img style="height: 45px; width: 45px" src="{{$user->avatar}}"></td>
            <td>{{$user->role}}</td>
            <td><a class="btn btn-warning" href="">Sửa</a></td>
            <td><button type="button" class="btn btn-danger delete-post" data-id="{{ $user->id }}">Xóa</button></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>

@endsection
