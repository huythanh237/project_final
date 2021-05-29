<!DOCTYPE html>
<html>
<head>
    <title>Super Market | @yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
<div class="agileits_header">
    <div class="container">
        <div class="agile-login" >
            <ul>
                <li><a href="{{route('auth.Register')}}"> Create Account </a></li>
                <li><a href="{{route('auth.show')}}">Login</a></li>
                <li><a href="{{route('contact')}}">Help</a></li>
            </ul>
        </div>
        <div class="product_list_header">
                <a class="w3view-cart" href="{{route('show-cart')}}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+84) 392 892 034</li>

            </ul>
        </div>
        <div class="w3ls_logo_products_left">
            <h1><a href="{{route('index')}}">Super Market</a></h1>
        </div>
        <div class="w3l_search">
            <form action="{{\Illuminate\Support\Facades\URL::to('/tim-kiem')}}" method="post">
                {{csrf_field()}}
                <input type="search" name="Search_Keyword" placeholder="Search Product..." required="">
                <button type="submit" name="Search_Button" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('index')}}" class="act">Trang chủ</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Loại sản phẩm<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="multi-gd-img">
                                    @foreach($categories as $category)
                                    <ul class="multi-column-dropdown">
                                        <li><a href="{{route('hienthi', $category->category_id)}}">{{$category->category_name}}</a></li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thương hiệu<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="multi-gd-img">
                                    @foreach($brands as $brand)
                                    <ul class="multi-column-dropdown">
                                        <li><a href="{{route('product-brand', $brand->brand_id)}}">{{$brand->brand_name}}</a></li>
                                    </ul>
                                    @endforeach
                                </div>

                            </div>
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">Giới thiệu</a></li>
                    <li><a href="{{route('contact')}}">Liên hệ</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- //navigation -->

@yield('content')

@yield('login')

@yield('product-detail')

@yield('checkout')

@yield('category')

@yield('register')

@yield('search')

@yield('about')

@yield('ShowCart')

@yield('contact')

@yield('all-product')

@yield('product-brand')
<!-- //footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Contact</h3>

                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Hưng Lĩnh, Hưng Nguyên, <span>Nghệ An.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:huyxmen237@gmail.com">huyxmen237@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>(+84) 392 892 034</li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Thông tin</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('about')}}">Giới Thiệu</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('contact')}}">Liên Hệ</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('all-product')}}">Sản Phẩm</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Danh mục</h3>
                @foreach($categories as $category)
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('hienthi', $category->category_id)}}">{{$category->category_name}}</a></li>
                </ul>
                @endforeach
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Profile</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('auth.show')}}">Đăng nhập</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('auth.Register')}}">Đăng ký</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="footer-copy">

        <div class="container">
            <p>© 2021 Super Market. All rights reserved</p>
        </div>
    </div>

</div>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<script src="/js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>
<!-- main slider-banner -->
<script src="/js/skdslider.min.js"></script>
<link href="/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

        jQuery('#responsive').change(function(){
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>
<!-- //main slider-banner -->
</body>
</html>
