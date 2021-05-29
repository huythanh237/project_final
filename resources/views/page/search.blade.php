@extends('layouts.app')
@section('title', 'Tìm kiếm')
@section('search')
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h2>SẢN PHẨM TÌM KIẾM</h2>
            <div class="grid_3 grid_5">
                <div id="myTabContent" class="tab-content">
                    <div class="agile_top_brands_grids">
                        @foreach($search_products as $search_product)
                            <div class="col-md-4 top_brand_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="images/offer.png" alt="" class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block" >
                                                    <div class="snipcart-thumb">
                                                        <a href="{{route('product-detail', $search_product->product_id)}}"><img style="height:150px"; width=120px" src="{{$search_product->product_images}}" /></a>
                                                        <p>{{$search_product->product_name}}</p>
                                                        <h4>{{$search_product->product_price}}</h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <a class="form-control primary" href="{{route('product-detail', $search_product->product_id)}}">Chi Tiết</a>
                                                    </div>
                                                </div>
                                            </figure>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"> </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- //top-brands -->
@endsection
