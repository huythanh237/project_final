@extends('layouts.app')

@section('title', 'Danh mục sản phẩm')
@section('category')
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h2>SẢN PHẨM</h2>

            <div class="grid_3 grid_5">
                <div id="myTabContent" class="tab-content">
                    <div class="agile_top_brands_grids">
                        @foreach($products as $product)
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
                                                        <a href="{{route('product-detail', $product->product_id)}}"><img style="height:150px"; width=120px" src="/{{$product->product_images}}" /></a>
                                                        <p>{{$product->product_name}}</p>
                                                        <h4>{{$product->product_price}}</h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <a class="form-control primary" href="{{route('product-detail', $product->product_id)}}" >CHI TIẾT</a>
                                                    </div>
                                                </div>
                                            </figure>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <div style="text-align: center">{{ $products->links() }}</div>
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
