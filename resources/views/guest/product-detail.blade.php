
@extends('guest.layout')
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
                            <li><a href="#">Bread<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Crumbs</a></li>
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
                                    <img src="{{ add_w_auto_to_cloudinary_url($product->thumbnail) }}" alt="">
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="1">
                                    <img src="/assets/images/shop/2.jpg" alt="">
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="2">
                                    <img src="/assets/images/shop/3.jpg" alt="">
                                </li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ add_w_auto_to_cloudinary_url($product->thumbnail) }}" alt="...">
                                </div>
                                <div class="item ">
                                    <img src="/assets/images/shop/shop-single-1.jpg" alt="...">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/shop/shop-single-1.jpg" alt="...">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-content">
                        <div class="product-meta row">
                            <div class="col-md-8">
                                <div class="title">
                                    <h3>{{$product->name}}</h3>
                                    <div class="rating-star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <h3 class="product-price">${{number_format($product->price)}} <del>{{--old price here--}}</del></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-share-review-btn">
                                    <a href="#">Add a Review <i class="fa fa-comments-o" aria-hidden="true"></i></a>
                                    <a href="#">Share this Item <i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-caption">
                                    <p>{{$product->short_desc}}</p>
                                    <a href="#">Read more</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="handle-counter" id="handleCounter">
                                    <button class="counter-minus btn btn-primary">-</button>
                                    <input type="text" value="3">
                                    <button class="counter-plus btn btn-primary">+</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="buy-now-btn">
                                    <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Buy it Now</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wishlist-btn">
                                    <a href="#">Add to Wishlist <i class="fa fa-star" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-tab">
                        <div class="tab-menu-area">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews <span>3</span></a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Features</a></li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="description-area">
                                    <div class="title-area">
                                        <h4>Description</h4>
                                    </div>
                                    <div class="content-area">
                                        <div class="col-md-8">
                                            <p>{!! $product->desc !!}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ add_w_auto_to_cloudinary_url($product->thumbnail) }}" class="img-responsive" alt="">
                                        </div>

                                        <div class="col-md-12">
                                            <h3>Game Highlights</h3>
                                            <p>ramdom text here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="description-area">
                                    <div class="title-area">
                                        <h4>Description</h4>
                                    </div>
                                    <div class="content-area">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <br><br>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero.
                                        </p>
                                        <img src="/assets/images/shop/shop-single2.jpg" class="img-responsive" alt="">
                                        <h3>Game Highlights</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. <br><br>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="description-area">
                                    <div class="title-area">
                                        <h4>Description</h4>
                                    </div>
                                    <div class="content-area">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <br><br>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero.
                                        </p>
                                        <img src="/assets/images/shop/shop-single2.jpg" class="img-responsive" alt="">
                                        <h3>Game Highlights</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. <br><br>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-item-title">
                        <h3>Related <b>Items</b></h3>
                    </div>
                    <div class="recent-productitems row owlcarousle" id="recent-product">
                        <div class="item">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="shop-single.html">
                                            <img src="/assets/images/shop/1.jpg" alt="" class="img-responsive product-img" />
                                            <div class="product-hover">
                                                <div class="list-inline text-center product-ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="pull-left">
                                            <a href="shop-single.html" class="title">Woo Single #1</a>
                                            <p class="price">$42 <s class="previous-price">$56</s></p>
                                        </div>

                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="" class="favourite">
                                                        <i class="fa fa-star-o"></i>
                                                    </a>
                                                </li>
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
                        <div class="item">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="shop-single.html">
                                            <img src="/assets/images/shop/2.jpg" alt="" class="img-responsive product-img" />
                                            <div class="product-hover">
                                                <div class="list-inline text-center product-ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="pull-left">
                                            <a href="shop-single.html" class="title">Woo Single #1</a>
                                            <p class="price">$42 <s class="previous-price">$56</s></p>
                                        </div>

                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="" class="favourite">
                                                        <i class="fa fa-star-o"></i>
                                                    </a>
                                                </li>
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
                        <div class="item">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="#shop-single.html">
                                            <img src="/assets/images/shop/3.jpg" alt="" class="img-responsive product-img" />
                                            <div class="product-hover">
                                                <div class="list-inline text-center product-ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="pull-left">
                                            <a href="shop-single.html" class="title">Woo Single #1</a>
                                            <p class="price">$42 <s class="previous-price">$56</s></p>
                                        </div>

                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="" class="favourite">
                                                        <i class="fa fa-star-o"></i>
                                                    </a>
                                                </li>
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
                        <div class="item">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="shop-single.html">
                                            <img src="/assets/images/shop/4.jpg" alt="" class="img-responsive product-img" />
                                            <div class="product-hover">
                                                <div class="list-inline text-center product-ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="pull-left">
                                            <a href="shop-single.html" class="title">Woo Single #1</a>
                                            <p class="price">$42 <s class="previous-price">$56</s></p>
                                        </div>

                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="" class="favourite">
                                                        <i class="fa fa-star-o"></i>
                                                    </a>
                                                </li>
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
                        <div class="item">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="shop-single.html">
                                            <img src="/assets/images/shop/6.jpg" alt="" class="img-responsive product-img" />
                                            <div class="product-hover">
                                                <div class="list-inline text-center product-ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="pull-left">
                                            <a href="shop-single.html" class="title">Woo Single #1</a>
                                            <p class="price">$42 <s class="previous-price">$56</s></p>
                                        </div>

                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="" class="favourite">
                                                        <i class="fa fa-star-o"></i>
                                                    </a>
                                                </li>
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
                        <div class="item">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="shop-single.html">
                                            <img src="/assets/images/shop/7.jpg" alt="" class="img-responsive product-img" />
                                            <div class="product-hover">
                                                <div class="list-inline text-center product-ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="pull-left">
                                            <a href="shop-single.html" class="title">Woo Single #1</a>
                                            <p class="price">$42 <s class="previous-price">$56</s></p>
                                        </div>

                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="" class="favourite">
                                                        <i class="fa fa-star-o"></i>
                                                    </a>
                                                </li>
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

                    </div>
                </div>
            </div>
        </div>
    </div>

@include('guest.html.twitter-section')

@endsection
