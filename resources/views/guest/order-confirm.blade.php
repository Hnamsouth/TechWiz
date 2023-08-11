@extends('guest.layout')

@section('after_css')
    <style>
        .inner-box {
            position: relative;
            display: block;
            background: #fff;
            padding: 66px 50px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
        }
        .icon-container {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #fec722;
            color: white;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .inner-box .upper-inner {
            margin-bottom: 36px;
        }
        .theme-btn-two{
            padding: 16px 30px;
            background-color: #fec722;
            font-weight: 700;
            color: #24252f;
            border: none;
        }
       .theme-btn-two:hover {
            background-color: #e3b420;
        }
    </style>
@endsection

@section('main-content')
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Order Confirmed</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Order Confirmed</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="all-products-area order-section">
        <div class="container">
            <div class="row clearfix justify-content-center" style="display: flex; justify-content: center">
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box login-inner">
                        <span class="icon-container" style="display: flex; justify-content: center; align-items: center"><i class="fa fa-check" style="scale: 4 "></i></span>
                        <div class="upper-inner" style="text-align: center">
                            <h2>Thank you!</h2>
                            @if($order->payment_method == \App\Models\Order::COD)
                                <p>Your order has been confirmed.</p>
                            @else
                                <p>We've received your payment and order is confirmed.</p>
                            @endif
                            <p>Check your email for more detail.</p>
                        </div>
                        <div class="d-flex justify-content-between py-1 px-2 text-dark" style="background-color: #eaeceb; font-weight: bold; display: flex; justify-content: space-between">
                            <div>Order ID</div>
                            <div>#{{$order->id}}</div>
                        </div>
                        <div class="d-flex justify-content-between py-1 px-2" style="display: flex; justify-content: space-between">
                            <div>Purchased Item ({{$totalQuantity}})</div>
                            <div>${{number_format($order->subtotal,2)}}</div>
                        </div>
                        <div class="d-flex justify-content-between py-1 px-2" style="display: flex; justify-content: space-between">
                            <div>Shipping</div>
                            <div>${{number_format($order->delivery_fee,2)}}</div>
                        </div>
                        <div class="d-flex justify-content-between py-1 px-2 border-top border-bottom" style="font-weight: bold; display: flex; justify-content: space-between">
                            <div class="text-dark">TOTAL</div>
                            <div style="color: #fec722">${{number_format($order->grand_total,2)}}</div>
                        </div>

                        <div class="d-flex justify-content-between py-1 px-2" style="display: flex; justify-content: space-between">
                            <div>Payment method</div>
                            <div>{{$order->payment_method}}</div>
                        </div>
                        <div class="d-flex justify-content-between py-1 px-2 mb-4" style="display: flex; justify-content: space-between">
                            <div>Payment status</div>
                            @if($order->payment_status)
                                <div style="color: #56cfe1">Paid</div>
                            @else
                                <div style="color: #fec722">Unpaid</div>
                            @endif
                        </div>

                        <div class="form-group" style="display: flex; justify-content: center">
                            <a href="{{url('/')}}" class="theme-btn-two">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


