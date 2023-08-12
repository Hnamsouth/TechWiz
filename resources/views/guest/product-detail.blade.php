@extends('guest.layout')

@section('after_css')
    <style>
        .buy-now-btn > button {
            display: block;
            text-align: center;
            background-color: #fec722;
            font-size: 14px;
            font-weight: 700;
            color: #24252f;
            padding: 12px;
            border: none;
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
                        <h1>Product Detail</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Our Shop<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Product Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="single-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="singe-product-title">
                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Back to the Shop</a>
                        <div class="product-navigation">
                            <a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="product-thumb-slider">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators product-slider-thumb">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                    <img src="{{add_w_auto_to_cloudinary_url($product->thumbnail)}}" alt="">
                                </li>
                                @foreach($product->images as $key => $image)
                                    <li data-target="#carousel-example-generic" data-slide-to="{{$key+1}}">
                                        <img src="{{add_w_auto_to_cloudinary_url($image->url)}}" alt="">
                                    </li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{add_w_auto_to_cloudinary_url($product->thumbnail)}}" alt="...">
                                </div>
                                @foreach($product->images as $key => $image)
                                    <div class="item ">
                                        <img src="{{add_w_auto_to_cloudinary_url($image->url)}}" alt="...">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-content">
                        <div class="product-meta row">
                            <div class="col-md-8">
                                <div class="title">
                                    <h3 style="margin-bottom: ">{{$product->name}}</h3>
                                    <h1 class="product-price">${{number_format($product->price, 2)}}</h1>
                                </div>
                                <div class="product-caption">
                                    <h3 style="margin-bottom:8px;">Product desciption</h3>
                                    <p>{{$product->short_desc}}</p>
                                </div>
                                <div>
                                    <h3 style="margin-bottom:8px;">Detail informations</h3>
                                    <div>
                                        Natural white cover paper
                                        Printed in full color and foil stamped
                                        Metallic gold envelope
                                        Blank interior
                                        Made in USA
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @if($product->quantity > 0)
                                    <form class="add-to-cart-form"
                                          action="{{url('add-to-cart',['product'=>$product->slug])}}" method="get">
                                        <div class="">
                                            <div class="handle-counter" id="handleCounter">
                                                <button style="margin-top: 0px;" class="counter-minus btn btn-primary">-</button>
                                                <input type="text" value="1" name="buy_quantity">
                                                <button style="margin-top: 0px;" class="counter-plus btn btn-primary">+</button>
                                            </div>
                                        </div>
                                        <div class="buy-now-btn">
                                            <button type="submit" style="width: 100%"><i
                                                    class="fa fa-shopping-basket" aria-hidden="true"></i> Add to
                                                cart
                                            </button>
                                        </div>
                                    </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="row">--}}
            {{--                <div class="col-md-12">--}}
            {{--                    <div class="product-tab">--}}
            {{--                        <div class="tab-menu-area">--}}
            {{--                            <!-- Nav tabs -->--}}
            {{--                            <ul class="nav nav-tabs" role="tablist">--}}
            {{--                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"--}}
            {{--                                                                          data-toggle="tab">Description</a></li>--}}
            {{--                            </ul>--}}
            {{--                        </div>--}}

            {{--                        <!-- Tab panes -->--}}
            {{--                        <div class="tab-content">--}}
            {{--                            <div role="tabpanel" class="tab-pane active" id="home">--}}
            {{--                                <div class="description-area">--}}
            {{--                                    <div class="title-area">--}}
            {{--                                        <h4>Description</h4>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="content-area">--}}
            {{--                                        {!! $product->desc !!}--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-item-title">
                        <h3>Related <b>Items</b></h3>
                    </div>
                    <div class="recent-productitems row owlcarousle" id="recent-product">
                        @foreach($related_products as $product)
                            <div class="item">
                                <div class="products clearifx">
                                    <div class="single-product">
                                        <div class="product-imgs">
                                            <a href="{{url('product-detail', ['product'=>$product->slug])}}">
                                                <div
                                                    style="position: relative; width: 100%; padding-top: calc(330 / 262 * 100%); overflow: hidden;">
                                                    <img src="{{add_w_auto_to_cloudinary_url($product->thumbnail)}}"
                                                         alt="" class="img-responsive product-img"
                                                         style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;"/>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="product-info">
                                            <div class="pull-left" style="max-width: 80%">
                                                <a href="{{url('product-detail', ['product'=>$product->slug])}}"
                                                   class="title">{{$product->name}}</a>
                                                <p class="price">$42 <s
                                                        class="previous-price">${{number_format($product->price)}}</s>
                                                </p>
                                            </div>

                                            <div class="pull-right">
                                                <ul class="list-inline">
                                                    <li>
                                                        <a href="" class="basket">
                                                            <i class="fa fa-shopping-basket"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END OF PRODUCTS -->
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('guest.html.twitter-section')

@endsection
