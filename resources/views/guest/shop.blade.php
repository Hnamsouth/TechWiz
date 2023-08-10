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
    </style>
@endsection

@section('main-content')
    <!-- START PAGE TITILE SECTION -->
    <div class="tg-banner tg-haslayout">
        <div class="tg-imglayer">
            <img src="assets/images/bg-pattran.png" alt="image desctription">
        </div>
        <div class="container">
            <div class="row">
                <div class="tg-banner-content tg-haslayout">
                    <div class="tg-pagetitle">
                        <h1>SPORTSOX SHOP</h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Sportsox shop</li>
                    </ol>
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
                                <p class="pull-left">Showing <b>{{ $data ?? ''->firstItem() }}–{{$data ?? ''->lastItem()}}</b> of <b>{{ $data ?? ''->total() }}</b> results</p>

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

                        @foreach($data ?? '' as $product)
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
                                            <p class="price">${{number_format($product->price)}}</p>
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

                    <div class="all-products">
                        <nav aria-label="Page navigation" class="navigation">
                            {{ $data ?? ''->appends(app('request')->input())->links('guest.html.pagination') }}
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
    @include('guest.html.twitter-section')
@endsection
