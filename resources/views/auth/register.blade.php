@extends('layouts.app')

@section('register')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Register Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- register -->
    <div class="register">
        <div class="container">
            <h2>Register Here</h2>
            <div class="login-form-grids">

                <form action="{{route('register')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Full Name...">
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" placeholder="Password Confirmation">
                    <div class="register-check-box">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
                        </div>
                    </div>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <!-- //register -->
@endsection
