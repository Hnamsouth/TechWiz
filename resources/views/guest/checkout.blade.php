@extends('guest.layout')

@section('after_css')
    <style>
        .checkout-section .upper-box .single-box a{
            color: #fec722;
        }

        .checkout-section .billing-form .form-group input:focus{
            border-color: #fec722 !important;
        }

        .checkout-section .additional-info .note-book textarea:focus{
            border-color: #fec722 !important;
        }

        .checkout-section .payment-info .payment-inner .custom-controls-stacked .description a:hover{
            color: #fec722;
        }

        .checkout-section .additional-info{
            margin-bottom: 30px;
        }

        .checkout-section{
            padding: 70px 0px;
        }

        .checkout-section .upper-box{
            margin-bottom: 40px;
        }

        .checkout-section .payment-info .payment-inner{
            padding-left: 25px;
            padding-right: 25px;
        }

        ====================================================================
        Checkout-page
        ====================================================================

        ***/

        .checkout-section{
            position: relative;
            display: block;
            padding: 120px 0px;
        }

        .checkout-section .upper-box{
            position: relative;
            margin-bottom: 70px;
        }

        .checkout-section .upper-box .single-box{
            position: relative;
            display: block;
            font-size: 15px;
            color: #222;
            padding: 21px 15px 23px 30px;
            background: #f2f3f5;
            margin-bottom: 30px;
        }

        .checkout-section .upper-box .single-box:last-child{
            margin-bottom: 0px;
        }

        .checkout-section .upper-box .single-box a{
            font-size: 15px;
        }

        .checkout-section .customer a:hover,
        .checkout-section .coupon a:hover{
            text-decoration: underline;
        }

        .checkout-section .sub-title{
            position: relative;
            display: block;
            font-size: 20px;
            line-height: 26px;
            color: #222;
            font-weight: 600;
            background: #f2f3f5;
            padding: 23px 15px 16px 30px;
        }

        .checkout-section .billing-info{
            position: relative;
            display: block;
            margin-bottom: 30px;
        }

        .checkout-section .billing-form{
            position: relative;
            display: block;
            padding: 23px 0px 28px 0px;
        }

        .checkout-section .billing-form .form-group{
            position: relative;
            display: block;
            margin-bottom: 23px;
        }

        .checkout-section .billing-form .form-group:last-child{
            margin-bottom: 0px;
        }

        .checkout-section .billing-form .form-group label{
            position: relative;
            display: block;
            font-size: 15px;
            color: #222;
            margin-bottom: 2px;
        }

        .checkout-section .billing-form .form-group input[type='text'],
        .checkout-section .billing-form .form-group input[type='password'],
        .checkout-section .billing-form .form-group input[type='email']{
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

        .checkout-section .billing-form .form-group .nice-select{
            border-radius: 0px;
            border: 1px solid #e6e6e6 !important;
            width: 100%;
            font-size: 13px;
            color: #848484;
            height: 45px;
        }

        .checkout-section .billing-form .form-group .nice-select:after{
            border-bottom: 2px solid #848484;
            border-right: 2px solid #848484;
            margin-top: -4px;
        }

        .checkout-section .billing-form .form-group .nice-select .list{
            width: 100%;
        }

        .checkout-section .billing-form .form-group input.address{
            margin-bottom: 10px;
        }

        .checkout-section .billing-form .form-group input:focus{

        }

        .checkout-section .billing-form .select-box .ui-state-default{
            width: 100% !important;
        }

        .checkout-section .billing-form .select-box .ui-selectmenu-button span.ui-icon:before{
            color: #848484;
        }

        .checkout-section .billing-form .create-acc{
            position: relative;
            display: block;
            margin-top: 3px;
        }

        .checkout-section .billing-form .create-acc .custom-controls-stacked .description{
            font-size: 15px;
            color: #222;
            cursor: pointer;
        }

        .checkout-section .additional-info .note-book{
            position: relative;
            display: block;
        }

        .checkout-section .additional-info .note-book label{
            position: relative;
            display: block;
            font-size: 15px;
            line-height: 26px;
            color: #222;
            margin-bottom: 2px;
        }

        .checkout-section .additional-info .note-book textarea{
            position: relative;
            display: block;
            width: 100%;
            height: 133px;
            border: 1px solid #e6e6e6;
            color: #848484;
            font-size: 13px;
            font-weight: 400;
            color: #848484;
            padding: 8px 20px;
            resize: none;
            transition: all 500ms ease;
        }

        .checkout-section .additional-info .note-book textarea:focus{

        }

        .checkout-section .order-info{
            position: relative;
            display: block;
            margin-bottom: 70px;
        }

        .checkout-section .order-info .order-list li{
            position: relative;
            display: block;
            border-bottom: 1px solid #e6e6e6;
            padding: 20px 30px;
        }

        .checkout-section .order-info .order-list li.title{
            padding: 24px 30px 2px 30px;
        }

        .checkout-section .order-info .order-list li.title p{
            font-size: 15px;
            color: #222;
            float: left;
        }

        .checkout-section .order-info .order-list li.title span{
            position: relative;
            display: block;
            font-size: 15px;
            color: #222;
            float: right;
        }

        .checkout-section .order-info .order-list li .single-box{
            position: relative;
            padding: 40px 0px 30px 100px;
            min-height: 100px;
        }

        .checkout-section .order-info .order-list li .single-box img{
            position: absolute;
            left: 0px;
            top: 0px;
            width: 80px;
            height: 100px;
        }

        .checkout-section .order-info .order-list li .single-box h6{
            position: relative;
            font-size: 16px;
            color: #222;
            float: left;
        }

        .checkout-section .order-info .order-list li .single-box span{
            position: relative;
            display: block;
            float: right;
            font-size: 15px;
            color: #222;
        }

        .checkout-section .order-info .order-list li.sub-total{
            padding: 17px 30px 10px 0px;
        }

        .checkout-section .order-info .order-list li.sub-total h6{
            font-size: 16px;
            font-weight: 500;
            color: #222;
            float: left;
        }

        .checkout-section .order-info .order-list li.sub-total span{
            position: relative;
            display: block;
            font-size: 15px;
            color: #848484;
            float: right;
        }

        .checkout-section .order-info .order-list li.order-total{
            padding: 17px 30px 11px 0px;
        }

        .checkout-section .order-info .order-list li.order-total h6{
            font-size: 16px;
            font-weight: 500;
            color: #222;
            float: left;
        }

        .checkout-section .order-info .order-list li.order-total span{
            position: relative;
            display: block;
            font-size: 18px;
            color: #222;
            font-weight: 500;
            float: right;
        }

        .checkout-section .payment-info .payment-inner{
            position: relative;
            display: block;
            border: 1px solid #e6e6e6;
            border-top: none;
            padding: 28px 30px 40px 30px;
        }

        .checkout-section .payment-info .payment-inner .custom-controls-stacked .description{
            font-size: 16px;
            color: #222;
            cursor: pointer;
        }

        .checkout-section .payment-info .payment-inner .custom-controls-stacked .description a{
            color: #222;
            z-index: 1;
            margin-left: 10px;
        }

        .checkout-section .payment-info .payment-inner .custom-controls-stacked .description a:hover{

        }

        .checkout-section .payment-info .payment-inner .option-block{
            position: relative;
            display: block;
            margin-bottom: 22px;
        }

        .checkout-section .payment-info .payment-inner .option-block p{
            position: relative;
            font-size: 13px;
            line-height: 24px;
            padding: 4px 0px 0px 30px;
        }

        .checkout-section .custom-control.material-checkbox .material-control-indicator {
            display: inline-block;
            position: absolute;
            top: 6px;
            left: 0px;
            width: 15px;
            height: 15px;
            border: 1px solid #e6e6e6;
            background: #f5f8fa;
            cursor: pointer;
        }

        .checkout-section .custom-control.material-checkbox .material-control-input:checked ~ .material-control-indicator{
            -webkit-transform: rotateZ(45deg) translate(1px, -5px);
            transform: rotateZ(45deg) translate(1px, -5px);
            width: 8px;
            border: 2px solid #898f9f;
            border-top: 0px;
            border-left: 0px;
            background: transparent;
            border-radius: 0px;
        }

        .checkout-section .payment-info .payment-inner .btn-box{
            padding-top: 2px;
        }

        .checkout-section .payment-info .payment-inner .btn-box .theme-btn-two{
            padding: 16px 30px;
            background-color: #fec722;
            font-weight: 700;
            color: #24252f;
            border: none;
        }
        .checkout-section .payment-info .payment-inner .btn-box .theme-btn-two:hover {
            background-color: #e3b420;
        }
        input[type="radio"], input[type="checkbox"] {
            opacity: 0;
            margin-left: 5px;
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
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <!-- START PRODUCTS SECTION -->
    <div class="all-products-area checkout-section">
        <div class="container">
            <form action="{{url("checkout")}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="inner-box">
                            <div class="billing-info">
                                <h4 class="sub-title">Billing Details</h4>
                                <div class="billing-form">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="name" value="{{ Auth::user()->name }}" required>
                                            </div>
                                            @error('name')
                                            <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Email <span style="color: #848484;">(You can only change your email in <a href="{{url('my-account')}}">My Account</a>)</span></label>
                                            <div class="field-input">
                                                <input type="email" value="{{ Auth::user()->email }}" readonly required>
                                            </div>
                                            {{--                                            @error('email')--}}
                                            {{--                                            <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>--}}
                                            {{--                                            @enderror--}}
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone Number*</label>
                                            <div class="field-input">
                                                <input type="text" name="phone" value="{{ Auth::user()->telephone }}" required>
                                            </div>
                                            @error('phone')
                                            <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Country*</label>
                                            <div class="field-input">
                                                <input type="text" name="country" value="{{ Auth::user()->country }}" required>
                                            </div>
                                            @error('country')
                                            <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Address*</label>
                                            <div class="field-input">
                                                <input type="text" name="address" class="address" value="{{ Auth::user()->address }}" required>
                                            </div>
                                            @error('address')
                                            <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Town/City*</label>
                                            <div class="field-input">
                                                <input type="text" name="city" value="{{ Auth::user()->city }}" required>
                                            </div>
                                            @error('city')
                                            <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>State*</label>
                                            <div class="field-input">
                                                <input type="text" name="state" value="{{ Auth::user()->state }}" required>
                                            </div>
                                            @error('state')
                                            <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Postal Code*</label>
                                            <div class="field-input">
                                                <input type="text" name="postcode" value="{{ Auth::user()->postcode }}" required>
                                            </div>
                                            @error('postcode')
                                            <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="create-acc">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control material-checkbox">
                                                        <input type="checkbox" class="material-control-input" name="save_info">
                                                        <span class="material-control-indicator"></span>
                                                        <span class="description">Save Your Info?</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="additional-info">
                                <div class="note-book">
                                    <label>Order Notes</label>
                                    <textarea name="note" placeholder="Notes about your order, e.g. special notes for your delivery"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="inner-box">
                            <div class="order-info">
                                <h4 class="sub-title">Your Order</h4>
                                <div class="order-product">
                                    <ul class="order-list clearfix">
                                        <li class="title clearfix">
                                            <p>Product</p>
                                            <span>Total</span>
                                        </li>
                                        @foreach($cart as $item)
                                            <li>
                                                <div class="single-box clearfix">
                                                    <img src="{{ substr_replace($item->thumbnail, 'w_auto/', strpos($item->thumbnail, 'upload/') + 7, 0) }}" alt="" style="object-fit: cover">
                                                    <h6 style="width: 65%;">{{$item->name}} (x{{$item->buy_quantity}})</h6>
                                                    <span>${{number_format($item->price*$item->buy_quantity,2)}}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                        <li class="sub-total clearfix">
                                            <h6>Sub Total</h6>
                                            <span>${{number_format($total,2)}}</span>
                                        </li>
                                        <li class="sub-total clearfix">
                                            <h6>Shipping</h6>
                                            <span>${{number_format($shipping,2)}}</span>
                                        </li>
                                        <li class="order-total clearfix">
                                            <h6>Order Total</h6>
                                            <span>${{number_format($total+$shipping,2)}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-info">
                                <h4 class="sub-title">Payment Proccess</h4>
                                <div class="payment-inner">
                                    <div class="option-block">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input name="payment_method" type="radio" class="material-control-input" value="{{\App\Models\Order::PAYPAL}}">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Paypal<a href="https://www.paypal.com/" target="_blank">(What is PayPal?)</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    @error('payment_method')
                                    <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                    <div class="btn-box">
                                        <button type="submit" class="theme-btn-two">Place Your Order<i class="flaticon-right-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- END OF PRODUCTS SECTION -->
    @include('guest.html.twitter-section')
@endsection

