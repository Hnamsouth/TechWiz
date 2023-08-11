@php
    function calculateTotalPrice($cartItems) {
        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $totalPrice += $item->buy_quantity * $item->price;
        }

        return number_format($totalPrice, 2);
    }
@endphp

<!-- START HEADER TOP SECTION -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="header-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div><!-- end of /. header social -->
                <div class="top-left-menu">
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Donation</a></li>
                    </ul>
                </div><!-- end of /. top left menu -->
            </div>
            <div class="col-md-6">
                <div class="header-right-menu">
                    <ul>
                        <li>Currency: <a href="#">USD</a></li>
                        <li>Wishlist: <a href="#">12</a></li>
                        <li> <a href="#"><i class="fa fa-lock"></i> Sign Up </a>or<a href="#">   Login</a></li>
                    </ul>
                </div><!-- end of /. header top right menu -->
            </div><!-- end of /. col -->
        </div><!-- end of /. row -->
    </div><!-- end of /. container -->
</div><!-- END OF /. HEADER TOP SECTION -->

<div class="header-section">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default cart">
        <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav shoping-cart-box">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            <i class="fa fa-shopping-bag"></i>
                            <div class="shop-cart">
                                <span class="cart-price">
                                     Your Cart (<span id="cart-count">{{ count(session('cart', [])) }}</span>)
                                </span>
                                <p id="total-price">${{ calculateTotalPrice(session('cart', [])) }}</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- end of /. cart ul -->
            </div><!-- end of /. cart area -->
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed top-m-btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="/assets/images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse top-nav" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" >
                    <li><a href="#">Features</a>
                    <li><a href="#">About</a></li>
                    <li>
                        <a href="{{route('shop-product')}}"  role="button" aria-haspopup="true" aria-expanded="false">Shop <b class="caret"></b></a>
                    </li>
                    <li>
                        <a href="{{route('blog')}}"  role="button" aria-haspopup="true" aria-expanded="false">Blog <b class="caret"></b></a>

                    </li>
                    <li><a href="{{route("contact")}}">Contact</a></li>
                    <li><a href="{{route("club-history")}}">Club History</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- end of /. container -->
    </nav><!-- End Navigation -->

    <!-- START MENU SECTION -->
    <nav class="navbar navbar-default bootsnav">
        <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search"  />
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>
            </div><!-- end of /. header search button -->
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="zoomIn" data-out="zoomOut">
                    <li><a href="#">Liga BBVA</a></li>
                    <li><a href="#">UEFA</a></li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">EPL</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu One</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Two</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Three</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Four</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Super Cup</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#">World Cup</a></li>
                    <li><a href="#">NPL</a></li>
                    <li><a href="#">Nation League</a></li>
                    <li><a href="#">Archive</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- end of container -->
    </nav><!-- end of /. nav -->
</div><!-- end of /. nav area-->
<!-- End Navigation -->
