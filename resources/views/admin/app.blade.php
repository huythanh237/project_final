<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:17:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="/assets/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- page css -->

    <!-- core css -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/assets/css/animate.min.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>

<body>
<div class="app header-default side-nav-dark">
    <div class="layout">
        <!-- Header START -->
        <div class="header navbar">
            <div class="header-container">
                <div class="nav-logo">
                    <a href="{{route('admin.index')}}">
                        <div class="logo logo-dark" style="background-image: url('/assets/images/logo/logo.png')"></div>
                        <div class="logo logo-white" style="background-image: url('/assets/images/logo/logo-white.png')"></div>
                    </a>
                </div>
                <ul class="nav-left">
                    <li>
                        <a class="sidenav-fold-toggler" href="javascript:void(0);">
                            <i class="mdi mdi-menu"></i>
                        </a>
                        <a class="sidenav-expand-toggler" href="javascript:void(0);">
                            <i class="mdi mdi-menu"></i>
                        </a>
                    </li>
                    <li class="search-box">
                        <a class="search-toggle" href="javascript:void(0);">
                            <i class="search-icon mdi mdi-magnify"></i>
                            <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                        </a>
                    </li>
                    <li class="search-input">
                        <input class="form-control" type="text" placeholder="Type to search...">
                        <div class="search-predict">
                            <div class="search-wrapper scrollable">
                                <div class="p-v-10">
                                        <span class="display-block m-v-5 p-h-20 text-gray">
                                            <i class="ti-file p-r-5"></i>
                                            <span>Files</span>
                                        </span>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="media-hover p-h-20">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="mdi mdi-file-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Document.xls</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="media-hover p-h-20">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-info">
                                                        <i class="mdi mdi-file-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Mockup.doc</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="media-hover p-h-20">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-danger">
                                                        <i class="mdi mdi-file-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Document.pdf</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="m-h-20 border top"></div>
                                <div class="p-v-10">
                                        <span class="display-block m-v-5 p-h-20 text-gray">
                                            <i class="ti-user p-r-5"></i>
                                            <span>Members</span>
                                        </span>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Debra Stewart</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Jane Hunt</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="search-footer">
                                <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="dropdown dropdown-animated scale-left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-apps"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-grid col-3 dropdown-lg">
                            <li>
                                <a href="#">
                                    <div class="text-center">
                                        <i class="mdi mdi-email-outline font-size-30 icon-gradient-success"></i>
                                        <p class="m-b-0">Email</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="text-center">
                                        <i class="mdi mdi-folder-outline font-size-30 icon-gradient-success"></i>
                                        <p class="m-b-0">Files</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="text-center">
                                        <i class="mdi mdi mdi-gauge font-size-30 icon-gradient-success"></i>
                                        <p class="m-b-0">Dashboard</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="text-center">
                                        <i class="mdi mdi-play-circle-outline font-size-30 icon-gradient-success"></i>
                                        <p class="m-b-0">Video</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="text-center">
                                        <i class="mdi mdi-image-filter font-size-30 icon-gradient-success"></i>
                                        <p class="m-b-0">Images</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="text-center">
                                        <i class="mdi mdi-image-filter-drama font-size-30 icon-gradient-success"></i>
                                        <p class="m-b-0">Cloud</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="notifications dropdown dropdown-animated scale-left">
                        <span class="counter">2</span>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell-ring-outline"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-lg p-v-0">
                            <li class="p-v-15 p-h-20 border bottom text-dark">
                                <h5 class="m-b-0">
                                    <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                                    <span>Notifications</span>
                                </h5>
                            </li>
                            <li>
                                <ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-15">
                                            <div class="media-img">
                                                <div class="icon-avatar bg-primary">
                                                    <i class="ti-settings"></i>
                                                </div>
                                            </div>
                                            <div class="info">
                                                    <span class="title">
                                                        System shutdown
                                                    </span>
                                                <span class="sub-title">8 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-15">
                                            <div class="media-img">
                                                <div class="icon-avatar bg-success">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>
                                            <div class="info">
                                                    <span class="title">
                                                        New User Registered
                                                    </span>
                                                <span class="sub-title">12 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-15">
                                            <div class="media-img">
                                                <div class="icon-avatar bg-warning">
                                                    <i class="ti-file"></i>
                                                </div>
                                            </div>
                                            <div class="info">
                                                    <span class="title">
                                                        New Attacthemnet
                                                    </span>
                                                <span class="sub-title">12 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-15">
                                            <div class="media-img">
                                                <div class="icon-avatar bg-info">
                                                    <i class="ti-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="info">
                                                    <span class="title">
                                                        New Order Received
                                                    </span>
                                                <span class="sub-title">12 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-v-15 p-h-20 text-center">
                                    <span>
                                        <a href="#" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                                    </span>
                            </li>
                        </ul>
                    </li>
                    <li class="user-profile dropdown dropdown-animated scale-left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img class="profile-img img-fluid" src="assets/images/avatars/thumb-13.jpg" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-md p-v-0">
                            <li>
                                <ul class="list-media">
                                    <li class="list-item p-15">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-13.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title text-semibold">Marshall Nichols</span>
                                            <span class="sub-title">UI/UX Desinger</span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="ti-settings p-r-10"></i>
                                    <span>Setting</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-user p-r-10"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-email p-r-10"></i>
                                    <span>Inbox</span>
                                    <span class="badge badge-pill badge-success pull-right">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}">
                                    <i class="ti-power-off p-r-10"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header END -->

        <!-- Side Nav START -->
        <div class="side-nav expand-lg">
            <div class="side-nav-inner">
                <ul class="side-nav-menu scrollable">
                    <li class="nav-item dropdown open">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                            <span class="title">Dashboard</span>
                            <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="active">
                                <a href="{{route('form-create-cate')}}">Thêm Danh Mục Sản Phẩm</a>
                            </li>
                            <li class="active">
                                <a href="{{route('category')}}">Danh Mục Sản Phẩm</a>
                            </li>
                            <li>
                                <a href="{{route('form-create-pro')}}">Thêm Sản phẩm</a>
                            </li>
                            <li>
                                <a href="{{route('product')}}">Danh Sách Sản phẩm</a>
                            </li>
                            <li>
                                <a href="index-bank.html">Đơn Hàng</a>
                            </li>
                            <li>
                                <a href="{{route('member')}}">Quản Lý Thành Viên</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">

            <!-- Content Wrapper START -->
            <div class="main-content">
                @yield('show-category')
                @yield('create-category')
                @yield('edit-category')
                @yield('show-product')
                @yield('create-product')
                @yield('edit-product')
                @yield('show-member')
            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            <footer class="content-footer">
                <div class="footer">
                    <div class="copyright">
                        <span>Copyright © 2021 <b class="text-dark">Theme_Nate</b>. All rights reserved.</span>
                        <span class="go-right">
                                <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                    </div>
                </div>
            </footer>
            <!-- Footer END -->

        </div>
        <!-- Page Container END -->

    </div>
</div>

<script src="assets/js/vendor.js"></script>

<script src="assets/js/app.min.js"></script>

<!-- page js -->
<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="assets/vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/dashboard/default.js"></script>

</body>


<!-- Mirrored from themenate.com/applicator/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:18:15 GMT -->
</html>

