@extends('layouts.app')
@section('title', 'Liên hệ')
@section('contact')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{route('index')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <div class="about">
        <div class="w3_agileits_contact_grids">
            <div class="col-md-6 w3_agileits_contact_grid_left">
                <div class="agile_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2948095185407!2d105.79403981440653!3d20.98081639479036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc508f938fd%3A0x883e474806a2d1f2!2zSOG7jWMgVmnhu4duIEvhu7kgVGh14bqtdCBN4bqtdCBNw6M!5e0!3m2!1svi!2s!4v1622207957154!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe>
                </div>
            </div>
            <div class="col-md-6 w3_agileits_contact_grid_right">
                <h2 class="w3_agile_header">Thông tin liên hệ</span></h2><br>
                <p>Địa chỉ 1: Hưng Lĩnh, Hưng Nguyên, Nghệ An</p><br>
                <p>Địa chỉ 2: 215 Triều Khúc, Tân Triều, Thanh Trì, Hà Nội</p><br>
                <p>SĐT: 0392892034 - 0974732609</p><br>
                <p>Fanpage: <div id="fb-root"></div><br>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="Uq8m7J0E"></script></p>
                <div class="fb-page" data-href="https://www.facebook.com/bongdaplus99.official/" data-tabs="message" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bongdaplus99.official/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bongdaplus99.official/">Bóng Đá Plus</a></blockquote></div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- contact -->
@endsection



