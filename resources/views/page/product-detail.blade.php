@extends('layouts.app')
@section('title', 'Chi tiết sản phẩm')
@section('product-detail')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{\Illuminate\Support\Facades\URL::to('/index')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Chi Tiết Sản Phẩm</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <div class="products">
        <div class="container">
            @foreach($products as $product)
            <div class="agileinfo_single">

                <div class="col-md-4 agileinfo_single_left">
                    <img style="height:200px"; width=200px id="example" src="/{{$product->product_images}}" alt="" class="img-responsive"/>
                </div>
                <div class="col-md-8 agileinfo_single_right">
                    <h2>{{$product->product_name}}</h2>
                    <div class="w3agile_description">
                        <h4>Mô tả:</h4><br>
                        <h5>{{$product->product_descrip}}</h5>
                    </div>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb agileinfo_single_right_snipcart">
                            <h5>Giá:</h5>
                            <h4 class="m-sing">{{number_format($product->product_price)}} đồng</h4>
                        </div>
                        <div class="snipcart-details agileinfo_single_right_details">
                            <form action="{{URL::to('/add-cart')}}" method="post">
                                @csrf
                                    <h5>Số lượng: </h5>
                                    <input style="width: 123px" type="number" name="qty" value="1" min="1">
                                    <input type="hidden" name="productid_hidden" value="{{$product->product_id}}">
                                    <div class="clearfix"> </div>
                                    <br>
                                    <button type="submit" name="submit" value="Add to cart" class="btn btn-fefault cart"><i class="fa fa-shopping-cart">Thêm giỏ hàng</i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>

            </div>
            @endforeach
        </div>
    </div>
@endsection
