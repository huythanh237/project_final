@extends('layouts.app')
@section('title', 'Giỏ hàng')
@section('ShowCart')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="{{route('index')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Checkout Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- checkout -->
    <div class="checkout">
        <div class="container">
            <?php
                $content = Cart::content();
            ?>
                <h3>Số lượng sản phẩm trong giỏ của bạn: {{Cart::content()->count()}}</h3>
                <br>
            <div class="checkout-right">
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    @foreach($content as $value)
                    <tr class="rem1">
                        <td class="invert-image"><img src="{{$value->options->images}}" width="50"></td>
                        <td class="invert">{{$value->name}}
                        <td class="invert">{{number_format($value->price). ' '. 'dong'}}</td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <form action="{{route('update-quantity-cart')}}" method="post">
                                        @csrf
                                        <input class="minicart-quantity" type="text" name="cart_quantity" value="{{$value->qty}}">
                                        <input type="hidden" value="{{$value->rowId}}" name="rowId_Cart" class="form-control">
                                        <input type="submit" value="Cập nhật" name="update" class="btn btn-danger btn-group-sm">
                                    </form>
                                </div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">
                            <?php
                                $subtotal = $value->price * $value->qty;
                                echo number_format($subtotal). ' '. 'đồng';
                            ?>
                        </td>
                        <td class="invert">
                            <div class="rem">
                                <a class="cart-item-delete" href="{{route('delete-cart', $value->rowId)}}">Xóa</a>
                            </div>

                        </td>
                    </tr>
                    @endforeach

                    <!--quantity-->
                    <script>
                        $('.value-plus').on('click', function(){
                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                            divUpd.text(newVal);
                        });

                        $('.value-minus').on('click', function(){
                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                            if(newVal>=1) divUpd.text(newVal);
                        });
                    </script>
                    <!--quantity-->
                </table>
            </div>
            <div class="checkout">
                <div class="checkout-left-basket">
                    <a href="" class="fa form-control">Thanh Toán</a><br>

                </div>
                <div class="checkout-right-basket">
                    <a href="{{route('all-product')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //checkout -->
@endsection


