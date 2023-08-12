@extends('guest.layout')

@section('after_css')
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <style>
        .position-absolute {
            position: absolute !important;
        }
        .position-relative {
            position: relative !important;
        }
        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }
        .mt-5, .my-5 {
            margin-top: 3rem !important;
        }
        .justify-content-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }
        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .d-inline-block {
            display: inline-block !important;
        }
        h1, h2, h3, h4, h5, h6 {
            position: relative;
            font-weight: bold;
            color: #222222;
            margin: 0px;
            transition: all 500ms ease;
        }
        p {
            position: relative;
            font-size: 15px;
            line-height: 26px;
            font-weight: 300;
            color: #848484;
            margin: 0px;
            transition: all 500ms ease;
        }
        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
        }
        .align-middle {
            vertical-align: middle !important;
        }
        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
        }
        .media-body {
            -ms-flex: 1;
            flex: 1;
        }
        .border {
            border: 1px solid #dee2e6 !important;
        }
        .pt-3, .py-3 {
            padding-top: 1rem !important;
        }
        .pb-2, .py-2 {
            padding-bottom: 0.5rem !important;
        }
        .mb-2, .my-2 {
            margin-bottom: 0.5rem !important;
        }
        .position-relative {
            position: relative !important;
        }
        .text-center {
            text-align: center !important;
        }
        .fill-current {
            fill: currentColor;
        }
        .w-100 {
            width: 100% !important;
        }
        .w-25 {
            width: 25% !important;
        }
        svg {
            overflow: hidden;
            vertical-align: middle;
        }
        .rounded {
            border-radius: 0.25rem !important;
        }
        /* Style My Account Page */
        #sidebar .widget-title1 {
            font-weight: 500;
            line-height: 26px;
            padding: 23px 0px 16px;
            position: relative;
        }
        #sidebar .accout-item {
            position: relative;
            display: block;
            padding: 12px 0px;
            line-height: 24px;
            font-weight: 500;
            font-size: 14px;
            text-transform: capitalize;
            color: #222;
            border-bottom: 1px solid #e3e3e3;
            text-align: left;
        }
        #sidebar .accout-item:last-child {
            border-bottom: none;
        }
        #sidebar .accout-item a{
            color: #222222;
        }
        #sidebar .accout-item a:hover {
            color: #fec722;
        }
        #sidebar li.current a {
            color: #fec722;
        }
        input[readonly]
        {
            background-color: #f2f3f5;
        }
        .rounded-full {
            border-radius: 9999px;
        }
        .text-white {
            color: #fff !important;
        }
        .ml-auto, .mx-auto {
            margin-left: auto !important;
        }
        .mr-auto, .mx-auto {
            margin-right: auto !important;
        }
        .w-100 {
            width: 100% !important;
        }
        .w-0 {
            width: 0;
        }
        .pb-1, .py-1 {
            padding-bottom: 0.25rem !important;
        }
        .pt-1, .py-1 {
            padding-top: 0.25rem !important;
        }
        /*Style avatar input*/
        .pro_img_wrapper {
            width: 120px;
            height: 120px;
            border-radius: 300px;
            position: relative;
        }
        #remove_pro_pic {
            position: absolute;
            color: #fff;
            border: 4px solid #ffffff;
            bottom: 0;
            right: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #707070;
        }
        #remove_pro_pic svg {
            width: 16px;
        }

        .more-categories i {
            position: relative;
            top: 2px;
        }

        .checkout-section {
            position: relative;
            display: block;
        }
        .checkout-section .sub-title {
            position: relative;
            display: block;
            font-size: 20px;
            line-height: 26px;
            color: #222;
            font-weight: 600;
            background: #f2f3f5;
            padding: 23px 15px 16px 30px;
        }
        .checkout-section .billing-form {
            position: relative;
            display: block;
            padding: 23px 0px 28px 0px;
        }
        .checkout-section .billing-form .form-group {
            position: relative;
            display: block;
            margin-bottom: 23px;
        }
        .checkout-section .billing-form .form-group label {
            position: relative;
            display: block;
            font-size: 15px;
            color: #222;
            margin-bottom: 2px;
        }
        .checkout-section .billing-form .form-group input[type='text'], .checkout-section .billing-form .form-group input[type='password'], .checkout-section .billing-form .form-group input[type='email'] {
            position: relative;
            display: block;
            width: 100%;
            height: 45px;
            border: 1px solid #e6e6e6;
            font-size: 15px;
            color: #848484;
            padding: 10px 15px;
            transition: all 500ms ease;
        }

        .rounded-circle {
            border-radius: 50% !important;
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
        .w-20 {
            width: 20%;
        }
        th, td {
            vertical-align: middle!important;
        }
        th {
            font-weight: normal!important;
        }
        .orderDatatable_actions li a {
            color: #222;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        .orderDatatable_actions li a i {
            width: 16px;
            color: #737373;
        }
        .orderDatatable_actions li a.view:hover {
            background: rgba(255, 65, 53, 0.1);
        }
        a.view:hover i {
            color: #fec722;
            text-decoration: none;
        }

        .w-10 {
            width: 2.5rem;
        }
        .h-10 {
            height: 2.5rem;
        }
        .rounded-full {
            border-radius: 9999px;
        }
        .text-lg {
            font-size: 1.125rem;
        }
        .fill-current {
            fill: currentColor;
        }
        .w-0 {
            width: 0;
        }
        .bg-green-500 {
            background-color: #fec722;
        }
        .bg-green-300 {
            background-color: #ffd459;
        }
        .border-2 {
            border-width: 2px;
            border-style: solid;
        }
        .border-gray-200 {
            border-color: #edf2f7;
        }
        .text-gray-600 {
            color: #718096;
        }
        .bg-gray-200 {
            background-color: #edf2f7;
        }

        /*Style rating model*/
        .rating-box {
            position: relative;
            margin-bottom: 0px;
        }
        .rating-box h6 {
            position: relative;
            display: inline-block;
            font-size: 16px;
            float: left;
            font-family: 'Poppins', sans-serif;
            color: #222;
            line-height: 26px;
            font-weight: 500;
            margin-right: 20px;
        }
        .review-form .form-group {
            position: relative;
            margin-bottom: 24px;
        }
        .product-details .product-discription .tabs-content .replay-inner .review-form .form-group label {
            position: relative;
            display: block;
            font-size: 15px;
            color: #848484;
            margin-bottom: 4px;
        }
        .review-form .form-group textarea {
            height: 220px;
            resize: none;
            position: relative;
            display: block;
            width: 100%;
            border: 1px solid #e6e6e6;
            padding: 10px 20px;
            font-size: 15px;
            color: #848484;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }
        .review-form .form-group:last-child {
            margin-bottom: 0px;
        }

        /*Style star rating*/
        div.stars {
            display: inline-block;
        }

        input.star { display: none; }

        label.star {
            float: right;
            padding: 0 5px;
            font-size: 20px;
            color: #ff8840;
            transition: all .2s;
        }

        input.star:checked ~ label.star:before {
            content: '\f005';
            color: #ff8840;
            transition: all .25s;
        }

        label.star:hover { transform: scale(1.3); }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }

        ul.rating {
            display: flex;
            color: #ff8840;
            margin-bottom: 1rem;
        }
        ul.rating li{
            padding: 0 2px;
        }
        textarea[readonly] {
            background-color: #f2f3f5;
        }
        .Product-cart-title .media-body a:hover h6{
            color: #fec722;
        }
        @media (min-width: 576px) {
            #refundModalDialog {
                max-width: 600px;
            }
        }

        .custom-control {
            padding-left: 2.2rem;
            text-align: justify;
        }

        .return-status {
            position: relative;
            display: inline-block;
            font-size: 16px;
            line-height: 26px;
            font-family: 'Poppins', sans-serif;
            font-weight: normal;
            color: #848484;
            text-align: center;
            background: #fff;
            padding: 12px 35px;
            z-index: 1;
            border: 1px solid #dee2e6;
        }

        /* Style return status */
        .text-gray-500 {
            color: rgb(107 114 128/1);
        }
        .font-medium {
            font-weight: 500;
        }
        .font-bold {
            font-weight: 700;
        }
        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem;
        }
        .z-10 {
            z-index: 10;
        }
        .bg-white {
            background-color: rgb(255 255 255/1);
        }
        .bg-gray-100 {
            background-color: rgb(243 244 246/1);
        }
        .bg-blue-600 {
            background-color: #fec722;
        }
        .gap-2 {
            gap: 0.5rem;
        }
        .h-6 {
            height: 1.5rem;
        }
        .w-6 {
            width: 1.5rem;
        }
        .text-\[10px\] {
            font-size: 10px;
        }
        .leading-6 {
            line-height: 1.5rem;
        }
        @media (min-width: 640px) {
            .sm\:block {
                display: block;
            }
        }
        .after\:bg-gray-100:after {
            content: "";
            background-color: #dee2e6;
        }
        .after\:rounded-lg:after {
            border-radius: 0.5rem;
        }
        .after\:-translate-y-1\/2:after {
            --tw-translate-y: -50%;
            transform: translate(0,0) rotate(0) skewX(0) skewY(0) scaleX(1) scaleY(1);
        }
        .after\:h-0\.5:after {
            height: 0.125rem;
        }
        .after\:block:after {
            display: block;
        }
        .after\:absolute:after {
            position: absolute;
        }
        .after\:top-1\/2:after {
            content: "";
            top: 50%;
        }
        .after\:inset-x-0:after {
            content: "";
            left: 0;
            right: 0;
        }
        .mb-5, .my-5 {
            margin-bottom: 3rem !important;
        }
        .mt-5, .my-5 {
            margin-top: 3rem !important;
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
                        <h1>My Account</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <!-- START PRODUCTS SECTION -->
    <div class="all-products-area account-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar" id="sidebar">
                        <h3 class="widget-title1">My Account</h3>
                        <ul>
                            <li class="accout-item "><a href="{{url('/my-account')}}"> Account Information </a></li>
                            <li class="accout-item current"><a href="{{url('/order-history')}}">Order History
                                    ({{Auth::user()->orders()->count()}})</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="inner-box checkout-section pt-0">
                        <div class="billing-info">
                            <h4 class="sub-title">Order Detail - Order #{{$order->id}}</h4>
                            <div class="payment-invoice">
                                <div class="payment-invoice__body">
                                    <div class="payment-invoice-qr d-flex justify-content-between my-5 px-xl-50 px-30 py-sm-30 py-20 ">
                                        <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                            <div class="payment-invoice-qr__number">
                                                <h2>
                                                    Order
                                                </h2>
                                                <p>Order ID : <span>#{{$order->id}}</span></p>
                                                <p>Date : <span>{{$order->created_at->format('F j, Y')}}</span></p>
                                            </div>
                                        </div><!-- End: .d-flex -->
                                        <div class="d-flex justify-content-center">
                                            <div class="payment-invoice-qr__address">
                                                <h5>Customer Info:</h5>
                                                <span>{{$order->fullname}}</span><br>
                                                <span>{{$order->telephone}}</span><br>
                                                <span>{{$order->email}}</span>
                                            </div>
                                        </div><!-- End: .d-flex -->
                                        <div class="d-flex justify-content-center">
                                            <div class="payment-invoice-qr__address">
                                                <h5>Delivered To:</h5>
                                                <span>{{$order->address}}</span><br>
                                                <span>{{$order->city}}, {{$order->state}}, {{$order->country}}</span><br>
                                                <span>Postal code. {{$order->postcode}}</span>
                                            </div>
                                        </div><!-- End: .d-flex -->
                                    </div><!-- End: .payment-invoice-qr -->
                                    <div class="payment-invoice-table">
                                        <div class="table-responsive">
                                            <table id="cart" class="table table-borderless">
                                                <thead style="background: #f2f3f5; color: #848484;">
                                                <tr class="product-cart__header">
                                                    <th scope="col">#</th>
                                                    <th scope="col" style="width: 38%">Product</th>
                                                    <th scope="col" class="text-right">Price Per Unit</th>
                                                    <th scope="col" style="width: 15%" class="text-right">Quantity</th>
                                                    <th scope="col" style="width: 18%" class="text-right">Order Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($order->products as $key => $product)
                                                    <tr class="border-bottom">
                                                        <th class="text-center">{{$key+1}}</th>
                                                        <td class="Product-cart-title">
                                                            <div class="media align-items-center">
                                                                <a href="{{ url('product-detail',['product'=>$product->slug]) }}"><img src="{{ add_w_auto_to_cloudinary_url($product->thumbnail) }}" width="60" alt="" class="rounded-lg mr-2"></a>
                                                                <div class="media-body">
                                                                    <a href="{{ url('product-detail',['product'=>$product->slug]) }}"><h6 class="mt-0">{{$product->name}}</h6></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="unit text-right">${{number_format($product->pivot->price,2)}}</td>
                                                        <td class="invoice-quantity text-right">x{{$product->pivot->quantity}}</td>
                                                        <td class="text-right order">${{ number_format($product->pivot->price * $product->pivot->quantity,2) }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="@if($order->status == 4) 2 @else 1 @endif"></td>
                                                    <td colspan="2">
                                                        <div class="subtotalTotal mb-0 text-right">Subtotal :</div>
                                                        <div class="shipping mb-0 text-right">Shipping charge :</div>
                                                        <h6 class="shipping mt-2 mb-0 text-right">Total :</h6>
                                                    </td>

                                                    <td colspan="2">
                                                        <div class="total-order float-right text-right fs-14 fw-500">
                                                            <p class="mt-1">${{number_format($order->subtotal,2)}}</p>
                                                            {{--                                                <p>-$126.30</p>--}}
                                                            <p>${{number_format($order->delivery_fee,2)}}</p>
                                                            <h5 class="mt-1" style="color: #fec722;">${{number_format($order->grand_total,2)}}</h5>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                        <div class="table-responsive mt-3">
                                            <table id="cart" class="table table-borderless">
                                                <thead style="background: #f2f3f5; color: #848484;">
                                                <tr class="product-cart__header">
                                                    <th scope="col">Payment</th>
                                                    <th scope="col">Order Note</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-left">
                                                        <h6 class="d-inline-block" style="width: 30%">Payment Method :</h6>
                                                        <span>{{$order->payment_method}}</span>
                                                    </td>
                                                    <td class="text-left">{{$order->note ?? '(No note)'}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="d-flex justify-content-center border pt-3 pb-2" id="request">
                                            @if($order->status <= 4)
                                                <div class="w-20">
                                                    <div class="position-relative mb-2">
                                                        <div class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white d-flex align-items-center">
                                                        <span class="text-center text-white w-100">
                                                            <svg class="w-100 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                <path d="M5 3 A 1.0001 1.0001 0 0 0 4 4L4 15L3 15C2.448 15 2 15.448 2 16L2 18C2 19.657 3.343 21 5 21L12.5 21C13.052 21 13.5 20.552 13.5 20L13.5 19.498047C13.5 19.179047 13.626563 18.873437 13.851562 18.648438L14.978516 17.521484C15.266516 17.233484 15.266516 16.766516 14.978516 16.478516L13.716797 15.216797C13.578797 15.078797 13.390313 15 13.195312 15L6 15L6 5L19 5L19 8 A 1.0001 1.0001 0 1 0 21 8L21 4 A 1.0001 1.0001 0 0 0 20 3L5 3 z M 8.5 7C8.224 7 8 7.224 8 7.5L8 8.5C8 8.776 8.224 9 8.5 9L9.5 9C9.776 9 10 8.776 10 8.5L10 7.5C10 7.224 9.776 7 9.5 7L8.5 7 z M 12.5 7C12.224 7 12 7.224 12 7.5L12 8.5C12 8.776 12.224 9 12.5 9L16.5 9C16.776 9 17 8.776 17 8.5L17 7.5C17 7.224 16.776 7 16.5 7L12.5 7 z M 16.984375 10.986328 A 1.0001 1.0001 0 0 0 16.839844 11L16 11 A 1.0001 1.0001 0 1 0 16 13L16 13.845703C16 14.530415 16.272171 15.184606 16.753906 15.667969 A 1.0001 1.0001 0 0 0 16.755859 15.669922L18.085938 17L16.755859 18.330078 A 1.0001 1.0001 0 0 0 16.753906 18.332031C16.272218 18.815347 16 19.469585 16 20.154297L16 21 A 1.0001 1.0001 0 1 0 16 23L16.832031 23 A 1.0001 1.0001 0 0 0 17.158203 23L21.832031 23 A 1.0001 1.0001 0 0 0 22.158203 23L23 23 A 1.0001 1.0001 0 1 0 23 21L23 20.154297C23 19.469585 22.728065 18.814003 22.244141 18.330078L20.914062 17L22.244141 15.669922C22.728018 15.18595 23 14.530415 23 13.845703L23 13 A 1.0001 1.0001 0 1 0 23 11L22.167969 11 A 1.0001 1.0001 0 0 0 21.841797 11L17.154297 11 A 1.0001 1.0001 0 0 0 16.984375 10.986328 z M 8.5 11C8.224 11 8 11.224 8 11.5L8 12.5C8 12.776 8.224 13 8.5 13L9.5 13C9.776 13 10 12.776 10 12.5L10 11.5C10 11.224 9.776 11 9.5 11L8.5 11 z M 18 13L21 13L21 13.845703C21 13.998991 20.93815 14.147784 20.830078 14.255859L19.5 15.585938L18.171875 14.257812L18.169922 14.255859C18.060896 14.145477 18 13.998114 18 13.845703L18 13 z M 19.5 18.414062L20.830078 19.744141C20.938153 19.852216 21 20.001009 21 20.154297L21 21L18 21L18 20.154297C18 20.001886 18.06085 19.85457 18.169922 19.744141L18.171875 19.742188L19.5 18.414062 z"/>
                                                            </svg>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-center md:text-base">Pending</div>
                                                </div>
                                                <div class="w-20">
                                                    <div class="position-relative mb-2">
                                                        <div class="position-absolute d-flex align-center align-items-center align-middle align-content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                                            <div class="w-100 bg-gray-200 rounded align-items-center align-middle align-center flex-1">
                                                                <div class="w-0 bg-green-300 py-1 rounded" style="width: @if($order->status == 0) 50% @elseif($order->status > 0) 100% @else 0% @endif;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="w-10 h-10 mx-auto @if($order->status >= 1) bg-green-500 @else bg-white border-2 border-gray-200 @endif rounded-full text-lg text-white d-flex align-items-center">
                                                        <span class="text-center @if($order->status >= 1) text-white @else text-gray-600 @endif w-100">
                                                            <svg class="w-100 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                <path d="M12 1C10.696 1 9.5965937 1.837 9.1835938 3L5 3C3.895 3 3 3.895 3 5L3 19C3 20.105 3.895 21 5 21L19 21C20.105 21 21 20.105 21 19L21 5C21 3.895 20.105 3 19 3L14.816406 3C14.403406 1.837 13.304 1 12 1 z M 12 3C12.552 3 13 3.448 13 4C13 4.552 12.552 5 12 5L19 5L19 19L5 19L5 5L12 5C11.448 5 11 4.552 11 4C11 3.448 11.448 3 12 3 z M 15.292969 8.2929688L11 12.585938L8.7070312 10.292969L7.2929688 11.707031L11 15.414062L16.707031 9.7070312L15.292969 8.2929688 z"/>
                                                            </svg>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-center md:text-base">Confirmed</div>
                                                </div>
                                                <div class="w-20">
                                                    <div class="position-relative mb-2">
                                                        <div class="position-absolute d-flex align-center align-items-center align-middle align-content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                                            <div class="w-100 bg-gray-200 rounded align-items-center align-middle align-center flex-1">
                                                                <div class="w-0 bg-green-300 py-1 rounded" style="width: @if($order->status == 1) 50% @elseif($order->status > 1) 100% @else 0% @endif;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="w-10 h-10 mx-auto @if($order->status >= 2) bg-green-500 @else bg-white border-2 border-gray-200 @endif rounded-full text-lg text-white d-flex align-items-center">
                                                    <span class="text-center @if($order->status >= 2) text-white @else text-gray-600 @endif w-100">
                                                       <svg class="w-100 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                           <path d="M3 2 A 1.0001 1.0001 0 1 0 3 4L4 4L4 14C4 15.64497 5.3550302 17 7 17L20 17 A 1.0001 1.0001 0 1 0 20 15L7 15C6.4349698 15 6 14.56503 6 14L6 4C6 2.9069372 5.0930628 2 4 2L3 2 z M 10 4C8.895 4 8 4.895 8 6L8 11C8 12.105 8.895 13 10 13L18 13C19.105 13 20 12.105 20 11L20 6C20 4.895 19.105 4 18 4L10 4 z M 13 6L15 6C15.552 6 16 6.448 16 7C16 7.552 15.552 8 15 8L13 8C12.448 8 12 7.552 12 7C12 6.448 12.448 6 13 6 z M 8 18 A 2 2 0 0 0 6 20 A 2 2 0 0 0 8 22 A 2 2 0 0 0 10 20 A 2 2 0 0 0 8 18 z M 18 18 A 2 2 0 0 0 16 20 A 2 2 0 0 0 18 22 A 2 2 0 0 0 20 20 A 2 2 0 0 0 18 18 z"/>
                                                       </svg>
                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-center md:text-base">Processing</div>
                                                </div>
                                                <div class="w-20">
                                                    <div class="position-relative mb-2">
                                                        <div class="position-absolute d-flex align-center align-items-center align-middle align-content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                                            <div class="w-100 bg-gray-200 rounded align-items-center align-middle align-center flex-1">
                                                                <div class="w-0 bg-green-300 py-1 rounded" style="width: @if($order->status == 2) 50% @elseif($order->status > 2) 100% @else 0% @endif;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="w-10 h-10 mx-auto @if($order->status >= 3) bg-green-500 @else bg-white border-2 border-gray-200 @endif rounded-full text-lg text-white d-flex align-items-center">
                                                        <span class="text-center @if($order->status >= 3) text-white @else text-gray-600 @endif w-100">
                                                           <svg class="w-100 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                               <path d="M1 5C0.448 5 0 5.448 0 6C0 6.552 0.448 7 1 7L6 7C6.552 7 7 7.448 7 8C7 8.552 6.552 9 6 9L2 9C1.448 9 1 9.448 1 10C1 10.552 1.448 11 2 11L4 11C4.552 11 5 11.448 5 12C5 12.552 4.552 13 4 13L2 13C1.448 13 1 13.448 1 14L1 17C1 17.552 1.448 18 2 18L3 18C3 19.657 4.343 21 6 21C7.657 21 9 19.657 9 18L14 18L15 18C15 19.657 16.343 21 18 21C19.657 21 21 19.657 21 18L22 18C22.138 18 22.269047 17.9725 22.388672 17.921875C22.747547 17.77 23 17.414 23 17L23 13L20.275391 7.5527344C20.106391 7.2137344 19.761813 7 19.382812 7L16 7C16 5.895 15.105 5 14 5L1 5 z M 16 8.75L18.917969 8.75L21.042969 13L16 13L16 8.75 z M 6 16.75C6.689 16.75 7.25 17.311 7.25 18C7.25 18.689 6.689 19.25 6 19.25C5.311 19.25 4.75 18.689 4.75 18C4.75 17.311 5.311 16.75 6 16.75 z M 18 16.75C18.689 16.75 19.25 17.311 19.25 18C19.25 18.689 18.689 19.25 18 19.25C17.311 19.25 16.75 18.689 16.75 18C16.75 17.311 17.311 16.75 18 16.75 z"/>
                                                           </svg>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-center md:text-base">Shipping</div>
                                                </div>
                                                <div class="w-20">
                                                    <div class="position-relative mb-2">
                                                        <div class="position-absolute d-flex align-center align-items-center align-middle align-content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                                            <div class="w-100 bg-gray-200 rounded align-items-center align-middle align-center flex-1">
                                                                <div class="w-0 bg-green-300 py-1 rounded" style="width: @if($order->status == 3) 50% @elseif($order->status > 3) 100% @else 0% @endif;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="w-10 h-10 mx-auto @if($order->status >= 4) bg-green-500 @else bg-white border-2 border-gray-200 @endif rounded-full text-lg text-white d-flex align-items-center">
                                                        <span class="text-center @if($order->status >= 4) text-white @else text-gray-600 @endif w-100">
                                                           <svg class="w-100 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                               <path d="M12 2C11.722 2 11.471062 2.113875 11.289062 2.296875L1.203125 11.097656L1.2050781 11.105469C1.0830781 11.197469 1 11.336 1 11.5C1 11.776 1.224 12 1.5 12L4 12L4 20C4 20.552 4.448 21 5 21L12.294922 21C12.105922 20.366 12 19.695 12 19C12 15.134 15.134 12 19 12L22.5 12C22.776 12 23 11.776 23 11.5C23 11.336 22.916922 11.197469 22.794922 11.105469L22.796875 11.097656L12.710938 2.296875C12.528937 2.113875 12.278 2 12 2 z M 19.003906 13.988281C16.242906 13.988281 14.003906 16.227281 14.003906 18.988281C14.003906 21.749281 16.242906 23.988281 19.003906 23.988281C21.764906 23.988281 24.003906 21.749281 24.003906 18.988281C24.003906 16.227281 21.764906 13.988281 19.003906 13.988281 z M 21.054688 17.048828C21.307938 17.048828 21.560406 17.146344 21.753906 17.339844C22.140906 17.726844 22.140906 18.351281 21.753906 18.738281L19.203125 21.289062C18.816125 21.676062 18.190688 21.676062 17.804688 21.289062L16.253906 19.738281C15.866906 19.351281 15.866906 18.726844 16.253906 18.339844C16.640906 17.952844 17.267297 17.952844 17.654297 18.339844L18.503906 19.189453L20.353516 17.339844C20.547016 17.146344 20.801437 17.048828 21.054688 17.048828 z"/>
                                                           </svg>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-center md:text-base">Completed</div>
                                                </div>
                                                {{--Truong hop huy don (hoan tien neu co)--}}
                                            @elseif($order->status = 5)
                                                <div class="w-25">
                                                    <div class="position-relative mb-2">
                                                        <div class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white d-flex align-items-center">
                                                <span class="text-center text-white w-100">
                                                   <svg class="w-100 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                       <path d="M21.37,10.102C21.763,9.971,22,9.565,22,9.15V6c0-1.1-0.9-2-2-2H4C2.9,4,2,4.9,2,6v3.15c0,0.415,0.237,0.821,0.63,0.952 C3.424,10.368,4,11.12,4,12c0,0.88-0.576,1.632-1.37,1.898C2.237,14.029,2,14.435,2,14.85V18c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2 v-3.15c0-0.415-0.237-0.821-0.63-0.952C20.576,13.632,20,12.88,20,12C20,11.12,20.576,10.368,21.37,10.102z M14.8,13.4 c0.387,0.387,0.387,1.013,0,1.4s-1.013,0.387-1.4,0L12,13.4l-1.4,1.4c-0.387,0.387-1.013,0.387-1.4,0s-0.387-1.013,0-1.4l1.4-1.4 l-1.4-1.4c-0.387-0.387-0.387-1.013,0-1.4s1.013-0.387,1.4,0l1.4,1.4l1.4-1.4c0.387-0.387,1.013-0.387,1.4,0s0.387,1.013,0,1.4 L13.4,12L14.8,13.4z"/>
                                                   </svg>
                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-center md:text-base">Canceled</div>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="mt-5 d-flex justify-content-end">
                                            @if(Session::get('error') && Session::get('error') != null)
                                                <div style="color:red; padding-top: 23px">{{ Session::get('error') }}</div>
                                                @php
                                                    Session::put('error', null)
                                                @endphp
                                            @endif
{{--                                            @if($order->status == 0)--}}
{{--                                                <a @if($order->payment_method === \App\Models\Order::PAYPAL) href="{{ route('process_paypal',['order'=>$order->code]) }}" @elseif($order->payment_method === \App\Models\Order::VNPAY) href="{{ route('process_vnpay',['order'=>$order->code]) }}" @endif type="submit" class="theme-btn-two">Retry Payment<i class="flaticon-return" style="transform: rotate(0deg);"></i></a>--}}
{{--                                            @endif--}}
                                            @if($order->status < 2)
                                                <button class="theme-btn-two" data-toggle="modal" data-target="#cancelOrderModal">Cancel<i class="flaticon-cancel" style="transform: rotate(0deg);"></i></button>
                                            @endif
                                        </div>
                                    </div><!-- End: .payment-invoice-table -->

                                </div><!-- End: .payment-invoice__body -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END OF PRODUCTS SECTION -->


    {{--Cancel confirmation modal--}}
    @if($order->status < 2)
        <div class="modal fade" id="cancelOrderModal" tabindex="-1" role="dialog" aria-labelledby="cancelOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius: 0; border: none">
                    <form action="{{url('cancel-order')}}" method="post">
                        @csrf
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <div class="modal-header border-0">
                            <h3 class="modal-title" id="cancelOrderModalLabel">Cancel Order</h3>
                        </div>
                        <div class="modal-body py-0">
                            <h5 class="pb-2">Are you sure you want to cancel this order?</h5>
                            <div class="form-group">
                                <label for="reason">Reason:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" id="reason1" value="Item no longer needed" required checked>
                                    <label class="form-check-label" for="reason1">Item no longer needed</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" id="reason2" value="Found a better price elsewhere">
                                    <label class="form-check-label" for="reason2">Found a better price elsewhere</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" id="reason3" value="Ordered by mistake">
                                    <label class="form-check-label" for="reason3">Ordered by mistake</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" id="reason4" value="Changed mind about purchase">
                                    <label class="form-check-label" for="reason4">Changed mind about purchase</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" id="reason5" value="Unhappy with customer service">
                                    <label class="form-check-label" for="reason5">Unhappy with customer service</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" id="reason6" value="Delivery issues">
                                    <label class="form-check-label" for="reason6">Delivery issues</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="theme-btn-two" data-dismiss="modal">Close</button>
                            <button type="submit" class="theme-btn-two" id="cancelOrderBtn">Cancel Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection


@section("after_js")
    @if($order->status < 2)
        <script>
            $(document).ready(function() {
                $('#cancelOrderBtn').click(function() {
                    $('#cancelOrderModal').modal('hide');
                    $('form').submit();
                });
            });
        </script>
    @endif

@endsection
