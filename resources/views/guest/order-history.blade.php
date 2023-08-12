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
        ul {
            list-style-type: none;
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
            color: #ff4135;
            text-decoration: none;
        }

        th, td {
            vertical-align: middle !important;
        }

        th {
            font-weight: normal !important;
        }

        .badge {
            font-size: 100%;
            font-weight: normal;
        }

        .badge-warning { /*PENDING*/
            color: #fa8b0c;
            background-color: rgba(250, 139, 12, 0.1);
        }

        .badge-light { /*CONFIRMED*/
            color: rgb(34, 86, 255);
            background-color: rgb(34, 86, 255, 0.1);
        }

        .badge-info { /*PROCESSING*/
            color: #5f63f2;
            background-color: rgba(95, 99, 242, 0.1);
        }

        .badge-primary { /*SHIPPING*/
            color: #56cfe1;
            background-color: rgba(86, 207, 225, 0.1);
        }

        .badge-success { /*COMPLETED*/
            color: #20c997;
            background-color: rgba(32, 201, 151, 0.1);
        }

        .badge-secondary { /*CANCEL*/
            color: #5a5f7d;
            background-color: rgba(90, 95, 125, 0.1);
        }

        .badge-danger { /*RETURNED*/
            color: #ff4135;
            background-color: rgba(255, 65, 53, 0.1);
        }

        .badge-dark { /*REFUNDED*/
            color: #ff35a7;
            background-color: rgba(255, 53, 167, 0.1);
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
                            <li class="accout-item"><a href="{{url('/my-account')}}"> Account Information </a></li>
                            <li class="accout-item current"><a href="{{url('/order-history')}}">Order History
                                    ({{Auth::user()->orders()->count()}})</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="inner-box checkout-section pt-0">
                        <div class="billing-info">
                            <h4 class="sub-title">Order History</h4>
                            <div class="table-responsive">
                                <table class="table mb-0 table-hover table-borderless border-0">
                                    <thead class="border-bottom" style="color: #848484;">
                                    <tr class="userDatatable-header">
                                        <th>
                                            <span class="userDatatable-title">Order ID</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Status</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Grand Total</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Payment Method</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Ordered Date</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title float-right">Detail</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    #{{$order->id}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-status d-inline-block">
                                                    @switch($order->status)
                                                        @case(0)
                                                            <span class="badge badge-warning">Pending</span>
                                                            @break
                                                        @case(1)
                                                            <span class="badge badge-light">Confirmed</span>
                                                            @break
                                                        @case(2)
                                                            <span class="badge badge-info">Processing</span>
                                                            @break
                                                        @case(3)
                                                            <span class="badge badge-primary">Shipping</span>
                                                            @break
                                                        @case(4)
                                                            <span class="badge badge-success">Completed</span>
                                                            @break
                                                        @case(5)
                                                            <span class="badge badge-secondary">Cancel</span>
                                                            @break
                                                        @default
                                                            <span>Unidentified</span>
                                                    @endswitch
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{number_format($order->grand_total)}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{$order->payment_method}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{$order->created_at->format('F j, Y')}}
                                                </div>
                                            </td>

                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex justify-content-end"
                                                    style="min-width: 50px">
                                                    <li>
                                                        <a href="{{url('order-detail', ['order'=>$order->code])}}"
                                                           class="view" data-toggle="tooltip" data-placement="top"
                                                           title="View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END OF PRODUCTS SECTION -->
@endsection


