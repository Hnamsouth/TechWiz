@extends('guest.layout')
@section('main-content')
    <!--************************************
				Banner Start
		*************************************-->
    <div class="tg-banner tg-haslayout">
        <div class="tg-imglayer">
            <img src="assets/images/bg-pattran.png" alt="image desctription">
        </div>
        <div class="container">
            <div class="row">
                <div class="tg-banner-content tg-haslayout">
                    <div class="tg-pagetitle">
                        <h1>shop online</h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">shop online</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
                    <div class="col-md-9 col-sm-8 col-xs-12 pull-right">
                        <div class="tg-product tg-productdetail">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="tg-productsliderbox">
                                        <div id="tg-productlargeslider" class="tg-productlargeslider">
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-01.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-02.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-03.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-01.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-02.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-03.jpg" alt="image description"></figure>
                                            </div>
                                        </div>
                                        <div id="tg-productthumbslider" class="tg-productthumbslider">
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-01.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-02.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-03.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-01.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-02.jpg" alt="image description"></figure>
                                            </div>
                                            <div class="item">
                                                <figure><img src="assets/images/shop/thumbs/img-03.jpg" alt="image description"></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <div class="tg-productinfo">
                                        <a class="tg-theme-tag" href="#">Mens wear</a>
                                        <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                        <div class="tg-productprice"><h3>$ 164</h3></div>
                                        <span class="tg-stars"><span></span></span>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequ atis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            <ul>
                                                <li>Consectetur tempor</li>
                                                <li>Quis nostrud exercitation nisi</li>
                                                <li>ncididunt ut lmagna aliqua</li>
                                                <li>Aliquip ex consequat.</li>
                                                <li>Ut enim ad minim veniam</li>
                                                <li>Duis aute irure dolor</li>
                                            </ul>
                                        </div>
                                        <div class="tg-productcolorsize">
                                            <div class="tg-productsize">
                                                <span>Size:</span>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="size1" id="s1" checked>
                                                    <label class="tg-sizeone" for="s1">s</label>
                                                </div>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="size1" id="m1">
                                                    <label class="tg-sizetwo" for="m1">m</label>
                                                </div>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="size1" id="l1">
                                                    <label class="tg-sizethree" for="l1">l</label>
                                                </div>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="size1" id="xl1">
                                                    <label class="tg-sizefour" for="xl1">xl</label>
                                                </div>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="size1" id="xxl1">
                                                    <label class="tg-sizefive" for="xxl1">xxl</label>
                                                </div>
                                            </div>
                                            <div class="tg-productcolor">
                                                <span>Color:</span>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="color1" id="one1" checked>
                                                    <label class="tg-colorone" for="one1"></label>
                                                </div>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="color1" id="two1">
                                                    <label class="tg-colortwo" for="two1"></label>
                                                </div>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="color1" id="three1">
                                                    <label class="tg-colorthree" for="three1"></label>
                                                </div>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="color1" id="four1">
                                                    <label class="tg-colorfour" for="four1"></label>
                                                </div>
                                                <div class="tg-checkbox">
                                                    <input type="checkbox" name="color1" id="five1">
                                                    <label class="tg-colorfive" for="five1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="tg-productquentity">
												<em class="minus">-</em>
												<input type="text" class="result" value="01" id="quantity1" name="quantity">
												<em class="plus">+</em>
											</span>
                                        <a class="tg-btn tg-btnaddtocart" href="#">add to cart</a>
                                        <a class="tg-btn tg-btncheckout" href="#">checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-themetabs">
                            <ul class="tg-themetabnav" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#one" aria-controls="one" role="tab" data-toggle="tab">Description</a>
                                </li>
                                <li role="presentation">
                                    <a href="#two" aria-controls="two" role="tab" data-toggle="tab">Terms &amp; Conditions</a>
                                </li>
                                <li role="presentation">
                                    <a href="#three" aria-controls="three" role="tab" data-toggle="tab">Reviews ( 07 )</a>
                                </li>
                            </ul>
                            <div class="tab-content tg-themetabcontent">
                                <div role="tabpanel" class="tab-pane active" id="one">
                                    <div class="tg-description">
                                        <img class="tg-alignleft" src="assets/images/player-detail/img-01.jpg" alt="image description">
                                        <div class="tg-section-heading">
                                            <h2>Lorem ipsum consec tetur</h2>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consec tetur acing elit, sed dousmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat auterure dolor. Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla atur</p>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quistat nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duisat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                        <ul class="tg-detail">
                                            <li><i class="fa fa-check"></i>Consectetur adipisicing elit do eiusmod</li>
                                            <li><i class="fa fa-check"></i>Incididunt ut labore et dolore magna aliqua</li>
                                            <li><i class="fa fa-check"></i>Ut enim ad minim veniam</li>
                                            <li><i class="fa fa-check"></i>Quis nostrud exercitation ullamco laboris nisi</li>
                                            <li><i class="fa fa-check"></i>Aliquip ex ea commodo consequat.</li>
                                            <li><i class="fa fa-check"></i>Duis aute irure dolor in reprehenderit</li>
                                        </ul>
                                        <ul class="tg-detail">
                                            <li><i class="fa fa-caret-right"></i>Consectetur adipisicing elit do eiusmod</li>
                                            <li><i class="fa fa-caret-right"></i>Incididunt ut labore et dolore magna aliqua</li>
                                            <li><i class="fa fa-caret-right"></i>Ut enim ad minim veniam</li>
                                            <li><i class="fa fa-caret-right"></i>Quis nostrud exercitation ullamco laboris nisi</li>
                                            <li><i class="fa fa-caret-right"></i>Aliquip ex ea commodo consequat.</li>
                                            <li><i class="fa fa-caret-right"></i>Duis aute irure dolor in reprehenderit</li>
                                        </ul>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quistat nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="two">
                                    <div class="tg-description">
                                        <img class="tg-alignright" src="assets/images/player-detail/img-01.jpg" alt="image description">
                                        <div class="tg-section-heading">
                                            <h2>Lorem ipsum consec tetur</h2>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consec tetur acing elit, sed dousmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat auterure dolor. Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla atur</p>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quistat nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duisat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                        <ul class="tg-detail">
                                            <li><i class="fa fa-check"></i>Consectetur adipisicing elit do eiusmod</li>
                                            <li><i class="fa fa-check"></i>Incididunt ut labore et dolore magna aliqua</li>
                                            <li><i class="fa fa-check"></i>Ut enim ad minim veniam</li>
                                            <li><i class="fa fa-check"></i>Quis nostrud exercitation ullamco laboris nisi</li>
                                            <li><i class="fa fa-check"></i>Aliquip ex ea commodo consequat.</li>
                                            <li><i class="fa fa-check"></i>Duis aute irure dolor in reprehenderit</li>
                                        </ul>
                                        <ul class="tg-detail">
                                            <li><i class="fa fa-caret-right"></i>Consectetur adipisicing elit do eiusmod</li>
                                            <li><i class="fa fa-caret-right"></i>Incididunt ut labore et dolore magna aliqua</li>
                                            <li><i class="fa fa-caret-right"></i>Ut enim ad minim veniam</li>
                                            <li><i class="fa fa-caret-right"></i>Quis nostrud exercitation ullamco laboris nisi</li>
                                            <li><i class="fa fa-caret-right"></i>Aliquip ex ea commodo consequat.</li>
                                            <li><i class="fa fa-caret-right"></i>Duis aute irure dolor in reprehenderit</li>
                                        </ul>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quistat nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane tg-reviews" id="three">
                                    <div id="tg-comments" class="tg-comments">
                                        <div class="tg-section-heading">
                                            <h2>Reviews</h2>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="tg-comment">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/thumbnails/img-08.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-commentdata">
                                                        <span class="tg-theme-tag"><time datetime="2016-05-03">May 3, 2016</time></span>
                                                        <a class="tg-btnreply" href="#">reply</a>
                                                        <div class="tg-section-heading">
                                                            <h3>Will Mccaulley</h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tg-comment">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/thumbnails/img-09.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-commentdata">
                                                        <span class="tg-theme-tag"><time datetime="2016-05-03">May 3, 2016</time></span>
                                                        <a class="tg-btnreply" href="#">reply</a>
                                                        <div class="tg-section-heading">
                                                            <h3>Will Mccaulley</h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tg-comment">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/thumbnails/img-10.jpg" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-commentdata">
                                                        <span class="tg-theme-tag"><time datetime="2016-05-03">May 3, 2016</time></span>
                                                        <a class="tg-btnreply" href="#">reply</a>
                                                        <div class="tg-section-heading">
                                                            <h3>Will Mccaulley</h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etire magna aliqua. Ut enim ad minim veniam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-youmayalsolike">
                            <div class="tg-section-heading">
                                <h2>you may also like</h2>
                            </div>
                            <div id="tg-relatedproductslider" class="tg-relatedproductslider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-02.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-03.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-04.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-05.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-06.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-07.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-08.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-09.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-product">
                                            <figure class="tg-productimg">
                                                <img src="assets/images/shop/img-10.jpg" alt="image description">
                                                <figcaption>
                                                    <a class="tg-btncart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="tg-productinfo">
                                                <a class="tg-theme-tag" href="#">Mens wear</a>
                                                <div class="tg-producttitle"><h2><a href="#">Casual Red T-Shirt</a></h2></div>
                                                <div class="tg-productprice"><h3>$ 164</h3></div>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-fullcontrol">
                                    <div class="tg-themebtnprev"><span class="fa fa-angle-left"></span></div>
                                    <div class="swiper-pagination tg-pagination-slider"></div>
                                    <div class="tg-themebtnnext"><span class="fa fa-angle-right"></span></div>
                                </div>
                            </div>
                        </div>
                        <div id="tg-leavecomment" class="tg-leavecomment">
                            <div class="tg-section-heading">
                                <h2>Leave Your Comment</h2>
                            </div>
                            <form id="tg-commentform" class="tg-commentform" method="post" action="#" enctype="text/plain">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email*" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message*" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="tg-btn" type="submit">send</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <div class="tg-widget tg-search">
                                <form class="form-search">
                                    <fieldset>
                                        <input type="search" placeholder="Search Here" class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tg-widget tg-catagories-widget">
                                <h3>catagories</h3>
                                <ul>
                                    <li><a href="#"><em>Web Design</em><i>389</i></a></li>
                                    <li><a href="#"><em>Marketing</em><i>203</i></a></li>
                                    <li><a href="#"><em>Wordpress</em><i>256</i></a></li>
                                    <li><a href="#"><em>Graphic Design</em><i>52</i></a></li>
                                    <li><a href="#"><em>Photography</em><i>43</i></a></li>
                                    <li><a href="#"><em>eCommerce</em><i>23</i></a></li>
                                    <li><a href="#"><em>Html</em><i>389</i></a></li>
                                </ul>
                            </div>
                            <div class="tg-widget tg-price-widget">
                                <h3>filter by price</h3>
                                <div class="tg-price-range">
                                    <div id="tg-slider-range" class="tg-slider-range"></div>
                                    <p>
                                        <label for="amount">Price:</label>
                                        <input type="text" id="amount" readonly>
                                    </p>
                                    <a class="tg-btn" href="#">Filter</a>
                                </div>
                            </div>
                            <div class="tg-widget">
                                <h3>Slideshow Widget</h3>
                                <div class="tg-slideshow-widget tg-haslayout">
                                    <div id="tg-slideshow-slider" class="tg-slideshow-slider tg-haslayout">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <figure class="tg-postimg">
                                                    <img src="assets/images/sidebar/img-01.jpg" alt="image description">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="tg-postimg">
                                                    <img src="assets/images/sidebar/img-01.jpg" alt="image description">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="tg-postimg">
                                                    <img src="assets/images/sidebar/img-01.jpg" alt="image description">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination tg-pagination-slider"></div>
                                        <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                        <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-widget tg-tags-widget">
                                <h3>popular tags</h3>
                                <ul>
                                    <li><a class="tg-btn" href="#">fashion</a></li>
                                    <li><a class="tg-btn" href="#">travel</a></li>
                                    <li><a class="tg-btn" href="#">sports</a></li>
                                    <li><a class="tg-btn" href="#">blog</a></li>
                                    <li><a class="tg-btn" href="#">magazine</a></li>
                                    <li><a class="tg-btn" href="#">fun time</a></li>
                                    <li><a class="tg-btn" href="#">ui</a></li>
                                    <li><a class="tg-btn" href="#">tech</a></li>
                                    <li><a class="tg-btn" href="#">soccer</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
