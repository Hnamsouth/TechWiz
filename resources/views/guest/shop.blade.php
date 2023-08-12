@extends('guest.layout')

@section('after_css')
    <style>
        #search-product {
            border-right: 1px solid #ececec;
            padding-right: 10px;
            background-color: #e7e7e7;
            margin-bottom: 20px;
        }
        #search-product input, #search-product input:focus {
            font-size: 14px;
            padding: 17px 25px;
            background: #e7e7e7;
            border: none;
            outline: none;
            box-shadow: none;
        }
        #search-product button {
            background: none;
            border: none;
            outline: none;
        }
        #search-product button i {
            font-size: 14px;
            color: #24252f;
            margin: 7px;
        }
        ul.tags li {
            width: 100%;
        }
        ul.tags li a {
            width: 100%;
        }
        .product-info .pull-right li button {
            background: #fec722 none repeat scroll 0 0;
            border-radius: 5px;
            display: block;
            padding: 12px 16px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            border: none;
        }

        /*modal success*/
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
            margin-top: 120px;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
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
                        <h1>Our Shop</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Our shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <!-- START PRODUCTS SECTION -->
    <div class="all-products-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="product-filter">
                                <p class="pull-left">Showing <b>{{ $data->firstItem() }}–{{$data->lastItem()}}</b> of <b>{{ $data->total() }}</b> results</p>

                                <form action="{{url('shop')}}" method="get" id="my-form" class="pull-right">
                                    <select name="orderCol" id="" onchange="document.getElementById('my-form').submit();">
                                        <option value="created_at/desc" @if(app('request')->input('orderCol') == null || app('request')->input('orderCol') == 'created_at/desc') selected @endif>Newest</option>
                                        <option value="created_at/asc" @if(app('request')->input('orderCol') == 'created_at/asc') selected @endif>Oldest</option>
                                        <option value="price/desc" @if(app('request')->input('orderCol') == 'price/desc') selected @endif>Highest Price</option>
                                        <option value="price/asc" @if(app('request')->input('orderCol') == 'price/asc') selected @endif>Lowest Price</option>
                                        <option value="sold_quantity/desc" @if(app('request')->input('orderCol') == 'sold_quantity/desc') selected @endif>Top Sell</option>
                                    </select>
                                </form>
                            </div><!-- END OF PRODUCT FILTER -->
                        </div>
                    </div>

                    <div class="row">

                        @foreach($data as $product)
                        <div class="col-md-4">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="{{url('product-detail', ['product'=>$product->slug])}}">
                                            <div style="position: relative; width: 100%; padding-top: calc(330 / 262 * 100%); overflow: hidden;">
                                                <img src="{{add_w_auto_to_cloudinary_url($product->thumbnail)}}" alt="" class="img-responsive product-img" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;"/>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="pull-left" style="max-width: 80%">
                                            <a href="{{url('product-detail', ['product'=>$product->slug])}}" class="title">{{$product->name}}</a>
                                            <p class="price">${{number_format($product->price, 2)}}</p>
                                        </div>

                                        @if($product->quantity > 0)
                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li>
                                                    <form class="add-to-cart-form" action="{{url('add-to-cart',['product'=>$product->slug])}}" method="get">
                                                        <input type="hidden" name="buy_quantity" value="1">
                                                        <button type="submit" class="basket" id="myBtn">
                                                            <i class="fa fa-shopping-basket"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div><!-- END OF PRODUCTS -->
                        </div>
                        @endforeach


                    </div>

                    <div class="all-products">
                        <nav aria-label="Page navigation" class="navigation">
                            {{ $data->appends(app('request')->input())->links('guest.html.pagination') }}
                        </nav>
                    </div><!-- END OF PRODUCTS SECTION -->


                </div><!-- END OF COL -->

                <div class="col-sm-3">
                    <div class="product-sidebar">
                        <div id="search-product">
                            <form action="{{url("shop")}}" method="get">
                                <input
                                    type="text"
                                    name="search"
                                    placeholder="Search"
                                    value="{{ app('request')->input('search') }}"
                                />
                                <input type="hidden" name="category_id" value="{{ app('request')->input('category_id') }}">
                                <input type="hidden" name="lowest_price" value="{{ app('request')->input('lowest_price') }}">
                                <input type="hidden" name="highest_price" value="{{ app('request')->input('highest_price') }}">
                                <input type="hidden" name="page" value="1">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="filter-by popular-tags text-uppercase" style="margin-bottom: 20px">
                            <h1 class="title">Categories</h1>

                            <div class="all-tags">
                                <ul class="list-inline tags">
                                    <li class="@if(app('request')->input('category_id') == null) active @endif">
                                        <a href="{{ url('shop') }}?{{ http_build_query(array_merge(request()->query(), ['category_id' => null])) }}" >
                                            All ({{$searchedDataCount}})
                                        </a>
                                    </li>
                                @foreach($categories as $category)
                                    <li class="@if(app('request')->input('category_id') == $category->id) active @endif">
                                        <a href="{{ url('shop') }}?{{ http_build_query(array_merge(request()->query(), ['category_id' => $category->id])) }}">
                                            {{$category->name}} ({{$category->products_count}})
                                        </a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="filter-by">
                            <h1 class="title text-uppercase">filter by price</h1>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <form id="filterForm" action="{{url("shop")}}" method="get">
                                    <div class="panel-body">
                                        <div id="slider">
                                            <div id="slider-range"></div>
                                            <p>
                                                <input class="text-left" id="rangeA" name="lowest_price value="{{ app('request')->input('lowest_price') }}"">
                                                <span class="text-center" id="rangeSeperator" >to</span>
                                                <input class="text-right" id="rangeB" name="highest_price" value="{{ app('request')->input('highest_price') }}">
                                            </p>
                                        </div>
                                    </div>
                                    <input type="hidden" name="search" value="{{ app('request')->input('search') }}">
                                    <input type="hidden" name="category_id" value="{{ app('request')->input('category_id') }}">


                                    <a href="" class="viewmore text-center" onclick="document.forms['filterForm'].submit(); return false;">Filter <i class="fa fa-filter"></i></a>
                                </form>
                            </div><!-- END OF PANEL GROUP SECTION -->
                        </div><!-- END OF FILTER BY SECTION -->

                    </div>
                </div><!-- END OF PRODUCT SIDEBAR SECTION -->
            </div>
        </div>
    </div><!-- END OF PRODUCTS SECTION -->
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Add product successful!</p>
        </div>

    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    @include('guest.html.twitter-section')
@endsection
