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
                        <h1>Payment Failed</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Payment Failed</a></li>
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
                        <span class="icon-container" style="display: flex; justify-content: center; align-items: center"><i class="fa fa-exclamation" style="scale: 4 "></i></span>
                        <div class="upper-inner" style="text-align: center">
                            <h2>Payment Failed!</h2>
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


