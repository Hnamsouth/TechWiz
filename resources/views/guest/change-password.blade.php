@extends('guest.layout')

@section('after_css')
    <style>
        .d-flex {
            display: flex;
        }
        .justify-content-center {
            justify-content: center;
        }
        .justify-content-between {
            justify-content: space-between;
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
            color: #ff4135;
        }
        #sidebar li.current a {
            color: #ff4135;
        }
        input[readonly]
        {
            background-color: #f2f3f5;
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
                            <li class="accout-item current"><a href="{{url('/my-account')}}"> Account Information </a></li>
                            <li class="accout-item"><a href="{{url('/order-history')}}">Order History
                                    ({{Auth::user()->orders()->count()}})</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="inner-box checkout-section pt-0">
                        <div class="billing-info">
                            <h4 class="sub-title">Change Password</h4>
                            @if($errors->any())
                                {!! implode('', $errors->all('<div style="color:red; padding-top: 23px">:message</div>')) !!}
                            @endif
                            @if(Session::get('error') && Session::get('error') != null)
                                <div style="color:red; padding-top: 23px">{{ Session::get('error') }}</div>
                                @php
                                    Session::put('error', null)
                                @endphp
                            @endif
                            @if(Session::get('success') && Session::get('success') != null)
                                <div style="color:green; padding-top: 23px">{{ Session::get('success') }}</div>
                                @php
                                    Session::put('success', null)
                                @endphp
                            @endif
                            <form class="billing-form" action="{{url('/my-account/change-password')}}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label>Current Password</label>
                                        <div class="field-input">
                                            <input type="password" name="current_password" required>
                                        </div>
                                        @error('current_password')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12  form-group">
                                        <label>New Password</label>
                                        <div class="field-input">
                                            <input type="password" name="new_password" required>
                                        </div>
                                        @error('new_password')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label>Confirm New Password</label>
                                        <div class="field-input">
                                            <input type="password" name="new_password_confirmation" required>
                                        </div>
                                        @error('new_password_confirmation')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 form-group" style="display: flex; justify-content: center">
                                        <button type="submit" id="save-btn" class="theme-btn-two " >Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END OF PRODUCTS SECTION -->
@endsection

