@extends('layouts.app')
@section('title', 'Về chúng tôi')
@section('about')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{route('index')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- about -->
    <div class="about">
        <div class="container">
            <h3 class="w3_agile_header">Về chúng tôi</h3>
            <div class="about-agileinfo w3layouts">
                <div class="col-md-12 about-wthree-grids grid-top">
                    <h4>Giới thiệu Website</h4>
                    <p class="top">Ngày này trong nhịp sống hối hả của con người thì việc giành thời gian để ra ngoài để mua sắm trở nên là 1 điều quá xa sỉ.. Những lo lắng về giao thông không an toàn và hạn chế trong việc mua hàng truyền thống có thể tránh được trong khi mua sắm trực tuyến. Với mua sắm trực tuyến(online), bạn cũng không cần phải lo lắng về điều kiện thời tiết. Người tiêu dùng và các khách hàng là những tổ chức, công ty,… đang dần chuyển sang mua sắm trực tuyến nhiều hơn nhằm tiết kiệm thời gian</p>
                    <p>Chính vì thế việc mua sắm online càng trở nên quan trọng và cần thiết,chỉ cần 1 cú click chuột thì họ có thể có được sản phẩm mà mình mong muốn.Việc mua sắm online có nhiều ưu điểm là có thể sở hữu mọi thứ thông qua các cú click chuột chứ không cần phải đến tận nơi để mua hàng. Sau khi vào website bán hàng, chọn sản phẩm, chỉ cần đặt hàng (order) người bán sẽ mang sản phẩm đến tận nhà bạn. Mua sắm online cho phép mua hàng bất cứ khi nào bạn muốn. Các cửa hang trên mạng không bao giờ đóng cửa, có thể mua sắm 24/24 giờ và 7 ngày trong tuần. Mua sắm ở các chợ, trung tâm thương mại hay cửa hàng rất khó để bạn có thể so sánh đặc điểm và giá của sản phẩm với nhau. Khi mua hàng online, bạn dễ dàng so sánh và đưa ra lựa chọn sản phẩm phù hợp nhất. Đôi khi bạn gặp phải những người bán hàng khó tính tại một số địa điểm bán hàng. Mua sắm online thì khách hàng chẳng phải để ý đến chuyện ấy nữa.</p>
                    <div class="about-w3agilerow">
                        <div class="col-md-4 about-w3imgs">
                            <img src="images/p3.jpg" alt="" class="img-responsive zoom-img"/>
                        </div>
                        <div class="col-md-4 about-w3imgs">
                            <img src="images/p4.jpg" alt=""  class="img-responsive zoom-img"/>
                        </div>
                        <div class="col-md-4 about-w3imgs">
                            <img src="images/p3.jpg" alt=""  class="img-responsive zoom-img"/>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
@endsection
