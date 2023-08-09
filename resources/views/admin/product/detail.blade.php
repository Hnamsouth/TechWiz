@extends("admin.layout")

@section("title", "Product Add")

@section("after_css")
    <style>
        .desc ul {
            list-style-type: circle;
            padding-left: 18px;
        }
        .desc ul li {
            list-style: unset;
        }
        .star-icon.active{
            color: #fa8b0c;
        }
        .star-icon.inactive {
            color: #C6D0DC;
        }
    </style>
@endsection

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Product Detail #{{$product->id}}</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="products mb-30">
        <div class="container-fluid">
            <!-- Start: Card -->
            <div class="card product-details h-100 mb-4">
                <div class="product-item d-flex p-sm-40 p-20">

                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Start: Product Slider -->
                            <div class="product-item__image">
                                <div class="wrap-gallery-article">
                                    <div id="myCarouselArticle" class="carousel slide carousel-fade" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarouselArticle" data-slide-to="0" class="active"></li>
                                            @foreach($product->images as $key => $image)
                                                <li data-target="#myCarouselArticle" data-slide-to="{{$key+1}}"></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="img-fluid d-flex bg-opacity-primary" src="{{ substr_replace($product->thumbnail, 'w_auto/', strpos($product->thumbnail, 'upload/') + 7, 0) }}" alt="Card image cap" title="">
                                            </div>
                                            @foreach($product->images as $key => $image)
                                                <div class="carousel-item">
                                                    <img class="img-fluid d-flex bg-opacity-primary" src="{{ substr_replace($image->url, 'w_auto/', strpos($image->url, 'upload/') + 7, 0) }}" alt="Card image cap" title="">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="overflow-hidden " id="slider-thumbs">
                                        <!-- Bottom switcher of slider -->
                                        <ul class="reset-ul d-flex flex-wrap list-thumb-gallery">
                                            <li>
                                                <a href="#" class="thumbnail" data-target="#myCarouselArticle" data-slide-to="0">
                                                    <img class="img-fluid d-flex bg-opacity-primary" src="{{ substr_replace($product->thumbnail, 'w_auto/', strpos($product->thumbnail, 'upload/') + 7, 0) }}" alt="">
                                                </a>
                                            </li>
                                            @foreach($product->images as $key => $image)
                                            <li>
                                                <a href="#" class="thumbnail" data-target="#myCarouselArticle" data-slide-to="{{$key+1}}">
                                                    <img class="img-fluid d-flex bg-opacity-primary" src="{{ substr_replace($image->url, 'w_auto/', strpos($image->url, 'upload/') + 7, 0) }}" alt="">
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- End: Product Slider -->
                        </div>
                        <div class=" col-lg-7">
                            <!-- Start: Product Details -->
                            <div class=" border-bottom mb-25 pb-sm-30 pb-15 mt-lg-0 mt-15">
                                <div class="product-item__body">
                                    <!-- Start: Product Title -->
                                    <div class="product-item__title">
                                        <h2 class="card-title fw-500">
                                            <a href="#">{{$product->name}}</a>
                                        </h2>
                                    </div>
                                    <!-- End: Product Title -->
                                    <div class="product-item__content text-capitalize">
                                        <!-- Start: Product Ratings -->
                                        <div class="stars-rating d-flex align-items-center">
                                            @php
                                                $averageRating = round($product->reviews->average('rating') * 2) / 2; // Round to nearest half
                                            @endphp
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $averageRating)
                                                    <span class="star-icon las la-star active"></span>
                                                @elseif($i - $averageRating <= 0.5)
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                @else
                                                    <span class="star-icon las la-star inactive"></span>
                                                @endif
                                            @endfor
                                            <span class="stars-rating__point">{{number_format($product->reviews->average('rating'),1)}}</span>
                                            <span class="stars-rating__review">
                                                        <span>{{$product->reviews->count()}}</span> Reviews</span>
                                        </div>
                                        <!-- End: Product Ratings -->
                                        <!-- Start: Product Brand -->
                                        <span class="product-desc-price">
                                            {{number_format($product->price)}}<sub class="ml-1">VND</sub>
                                        </span>
                                        @if($product->discount_id != null)
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="product-price">$100.00</span>
                                                <span class="product-discount">50% Off</span>
                                            </div>
                                        @endif

                                        <!-- End: Product Brand -->
                                        <!-- Start: Product Description -->
                                        <p class=" product-deatils-pera">{{$product->short_desc}}</p>
                                        <!-- End: Product Description -->

                                        <!-- Start: Product Stock -->
                                        <div class="product-details__availability">
                                            <div class="title">
                                                <p>Quantity:</p>
                                                <span class="stock">{{$product->quantity}}</span>
                                            </div>
                                            <div class="title">
                                                <p>Category:</p>
                                                <span class="free">{{$product->Category->name}}</span>
                                            </div>
                                            <div class="title">
                                                <p>SKU:</p>
                                                <span class="free">{{$product->sku ?? '...'}}</span>
                                            </div>
                                            <div class="title">
                                                <p>Created:</p>
                                                <span class="free">{{$product->created_at}}</span>
                                            </div>
                                            <div class="title">
                                                <p>Updated:</p>
                                                <span class="free">{{$product->updated_at}}</span>
                                            </div>
                                        </div>
                                        <!-- End: Product Stock -->
                                        <!-- Start: Product Selections -->
                                        @if (auth()->user()->isAdmin(\App\Models\Admin::ADMIN))
                                        <div class="product-item__button mt-lg-30 mt-sm-25 mt-20 d-flex flex-wrap">
                                            <div class=" d-flex flex-wrap product-item__action align-items-center">
                                                <a href="{{url("admin2/product/edit",["product"=>$product->slug])}}">
                                                <button class="btn btn-primary btn-default btn-squared border-0 mr-10 my-sm-0 my-2"><span data-feather="edit"></span> Edit</button>
                                                </a>
                                                <form id="delete-form" action="{{ url("admin2/product/delete",["product"=>$product->slug]) }}" method="post" style="">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button type="button" class="btn btn-secondary btn-default btn-squared border-0 px-25 my-sm-0 my-2 mr-2" data-toggle="modal" data-target="#modal-info-confirmed">
                                                    <span data-feather="trash-2"></span>
                                                    Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End: Product Selections -->
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- Start: Product Availability -->
                            <div class="product-details__availability">
                                <div class="title align-items-baseline">
                                    <p>Description:</p>
                                    <span class="free desc">{!! $product->desc !!}</span>
                                </div>
                            </div>
                            <!-- End: Product Availability -->
                            <!-- End: Product Details -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Card -->

            @if (auth()->user()->isAdmin(\App\Models\Admin::ADMIN))
            <!-- Delete Confirm Modal -->
            <div class="modal-info-confirmed modal fade show" id="modal-info-confirmed" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-info" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-info-body d-flex">
                                <div class="modal-info-icon warning">
                                    <span data-feather="info"></span>
                                </div>

                                <div class="modal-info-text">
                                    <h6>Do you Want to delete product #{{$product->id}}?</h6>
                                    <p>{{$product->name}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-light btn-outlined btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-info btn-sm" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Delete Confirm Modal -->
            @endif

            <div class="card card-default card-md mb-4">
                <div class="card-header py-20 px-sm-40 px-20">
                    <h6>Reviews</h6>
                </div>
                <div class="card-body pb-10 px-sm-40 px-20">
                    @foreach($reviews as $review)
                        <div class="atbd-comment-box media">
                            <div class="atbd-comment-box__author mt-2">
                                <figure>
                                    <img src="/admin/img/author/1.jpg" class="bg-opacity-primary d-flex" alt="Admin Autor">
                                </figure>
                            </div><!-- ends: .atbd-comment-box__author -->
                            <div class="atbd-comment-box__content media-body">
                                <div class="comment-content-inner cci">
                                    <div>
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $averageRating)
                                                <span class="star-icon las la-star active"></span>
                                            @elseif($i - $averageRating <= 0.5)
                                                <span class="star-icon las la-star-half-alt active"></span>
                                            @else
                                                <span class="star-icon las la-star inactive"></span>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="cci__author-info">{{$review->order->user->fullname}} <span style="color: darkgray">- {{$review->created_at->format('F j, Y')}}</span></span>
                                    <p class="cci__comment-text">{{$review->comment}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
