@extends('layouts.app')

@section('login')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Login Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- login -->
    <div class="login">
        <div class="container">
            <h2>Login Form</h2>

            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form action="{{route('auth.login')}}" method="post">
                    @csrf
                    <input type="email" name="email" placeholder="Email Address">
                    @error('email')<div class="alert alert-danger"> {{$message}} </div>@enderror
                    <input type="password" name="password" placeholder="Password">
                    @error('password')<div class="alert alert-danger"> {{$message}} </div>@enderror
                    <div class="form-group text-center">
                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
            <h4>For New People</h4>
            <p><a href="{{route('auth.Register')}}">Register Here</a><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
        </div>
    </div>
    <!-- //login -->
@endsection
