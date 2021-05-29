@extends('layouts.app')
@section('title', 'Trang chủ')
@section('content')

    <ul id="demo1">
        <li>
            <img src="images/11.jpg" alt="" />

            <div class="slide-desc">
                <h3>Mua sản phẩm trực tuyến trên trang của chúng tôi</h3>
            </div>
        </li>
        <li>
            <img src="images/22.jpg" alt="" />
            <div class="slide-desc">
                <h3>Nhiều thương hiệu nổi tiếng đã hợp tác với chúng tôi</h3>
            </div>
        </li>

        <li>
            <img src="images/44.jpg" alt="" />
            <div class="slide-desc">
                <h3>Chúng tôi cam kết tất cả sản phẩm của chúng tôi đều chất lượng cao</h3>
            </div>
        </li>
    </ul>

    <div class="top-brands">
        <div class="container">
            <h2>TẤT CẢ SẢN PHẨM</h2>
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
                                                            <a href="{{route('product-detail', $product->product_id)}}"><img style="height:150px"; width=120px" src="{{$product->product_images}}" /></a>
                                                            <p>{{$product->product_name}}</p>
                                                            <h4>{{number_format($product->product_price)}} đồng</h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <a class="form-control" href="{{route('product-detail', $product->product_id)}}">CHI TIẾT</a>
                                                        </div>
                                                    </div>
                                                </figure>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                    <br>
                                    <div style="text-align: center">{{ $products->links() }}</div>
                                    <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
