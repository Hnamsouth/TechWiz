@extends('guest.layout')
@section('main-content')
<!-- START PAGE TITILE SECTION -->
<div class="player-profile-section page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="section-title profile-title">
                    <h1>Latest News</h1>
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

<div class="blog-container-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-container">
                    <!-- START BLOG ITEMS -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-single-thumb">
                                <img src="/assets/images/blog/b-single1.jpg" alt="" class="img-responsive">
                                <span>Euro 2016</span>
                            </div>
                            <div class="blog-single-content-title">
                                <h3>Fernando Santos's Portugal manifesto</h3>
                                <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15  <i class="fa fa-comments"></i> 16 </span>
                                <ul class="blog-share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                            <div class="blog-single-content">
                                <p>
                                    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. <br><br>

                                    Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. In ac dui quis
                                </p>
                                <h3>Game Highlights</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="blog-single-sub-item">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <br>

                                                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                            </p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>  <b>Donec mollis hendrerit risus hasellus nec sem in justo llentesque facilisis. Etiam imperdiet imperdiet orci. </b>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-single-sub-item">
                                            <img src="/assets/images/blog/b-single2.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <br>

                                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit
                                </p>

                            </div>
                            <div class="author-profile">
                                <div class="profile-pic"><img src="/assets/images/blog/admin.jpg" alt="" class="img-responsive"></div>
                                <div class="author-content">
                                    <h4>Henry Anderglass</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat.</p>
                                </div>
                                <ul class="author-follow">
                                    <li><span>Follow:</span></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                            <div class="comment-area">
                                <div class="comment-replay">
                                    <div class="comment-title-area">
                                        <h3> <span>Leave a </span> <b>Reply</b></h3>
                                        <a href="#">Submit a Reply  &nbsp;<i class="fa fa-commenting"></i> </a>
                                    </div>
                                    <form action="#" class="row comment-reply">
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" placeholder="Name*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" class="form-control" placeholder="Email*">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control" placeholder="Website*">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea name="yourtext" class="form-control" cols="30" rows="10" placeholder="Your Text"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="comment-submit" value="Submit A Reply">
                                        </div>
                                    </form>
                                </div>
                                <div class="comment-box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="author-meta">
                                                <div class="thumb"><img src="/assets/images/blog/comment1.jpg" alt="" class="img-responsive"></div>
                                                <div class="meta-content">
                                                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                    <h3>Henry Anderbar</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="author-comment-content">
                                                <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15  <i class="fa fa-comments"></i> 16 </span>
                                                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam emper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, ndit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante dunt tempus. Donec vitae sapien ut libero venenatis faucibus. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row admin">
                                        <div class="col-md-4">
                                            <div class="author-meta">
                                                <div class="thumb"><img src="/assets/images/blog/comment2.jpg" alt="" class="img-responsive"></div>
                                                <div class="meta-content">
                                                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                    <h3>Richard Ashley</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="author-comment-content">
                                                <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15  <i class="fa fa-comments"></i> 16 </span>
                                                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam emper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, ndit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante dunt tempus. Donec vitae sapien ut libero venenatis faucibus. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="author-meta">
                                                <div class="thumb"><img src="/assets/images/blog/comment3.jpg" alt="" class="img-responsive"></div>
                                                <div class="meta-content">
                                                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                    <h3>Alex Rashley</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="author-comment-content">
                                                <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15  <i class="fa fa-comments"></i> 16 </span>
                                                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam emper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, ndit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante dunt tempus. Donec vitae sapien ut libero venenatis faucibus. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <div class="widget-title">
                            <h3>Today on Sportsox</h3>
                        </div>
                        <div class="widget-container">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <ul class="sport-item">
                                            <li>
                                                <a href="#">
                                                    <img src="/assets/images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                    <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end of slider /. item -->
                                    <div class="item">
                                        <ul class="sport-item">
                                            <li>
                                                <a href="#">
                                                    <img src="/assets/images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                    <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end of slider /. item -->
                                    <div class="item">
                                        <ul class="sport-item">
                                            <li>
                                                <a href="#">
                                                    <img src="/assets/images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                    <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end of slider /. item -->
                                    <div class="item">
                                        <ul class="sport-item">
                                            <li>
                                                <a href="#">
                                                    <img src="/assets/images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                    <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end of slider /. item -->
                                    <div class="item">
                                        <ul class="sport-item">
                                            <li>
                                                <a href="#">
                                                    <img src="/assets/images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                    <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end of slider /. item -->

                                </div>
                                <ol class="carousel-indicators sport-item slider-game-time">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                        <a href="#">
                                            <span>16:48</span>
                                            <p>Best Player in Europe final three: Cristiano Ronaldo</p>
                                        </a>
                                    </li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1">
                                        <a href="#">
                                            <span>15:24</span>
                                            <p>Sweden and Germany in last four</p>
                                        </a>
                                    </li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2">
                                        <a href="#">
                                            <span>12:28</span>
                                            <p>Men's Olympic football: day three</p>
                                        </a>
                                    </li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3">
                                        <a href="#">
                                            <span>11:42</span>
                                            <p>Carvajal wins Super Cup for Madrid</p>
                                        </a>
                                    </li>
                                    <li data-target="#carousel-example-generic" data-slide-to="4">
                                        <a href="#">
                                            <span>11:42</span>
                                            <p>Praise for City signing John Stones</p>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-title">
                            <h3>Latest News</h3>
                        </div>
                        <div class="widget-container">
                            <div class="widget-latest-blog">
                                <div class="blog-items-sm latest-blog">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="/assets/images/l-news/1.jpg" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <span>Euro 2016</span>
                                            <h3>Lukas Podolski retires from Germany duty</h3>
                                            <p><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-items-sm latest-blog">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="/assets/images/l-news/2.jpg" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <span>Euro 2016</span>
                                            <h3>Lukas Podolski retires from Germany duty</h3>
                                            <p><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-items-sm latest-blog">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="/assets/images/l-news/3.jpg" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <span>Euro 2016</span>
                                            <h3>Lukas Podolski retires from Germany duty</h3>
                                            <p><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="widget-container">
                            <ul class="cat">
                                <li><a href="#">Liga BBVA</a></li>
                                <li><a href="#">UEFA</a></li>
                                <li><a href="#">EPL</a></li>
                                <li><a href="#">Super Cup</a></li>
                                <li><a href="#">World Cup</a></li>
                                <li><a href="#">NPL</a></li>
                                <li><a href="#">Nation League</a></li>
                                <li><a href="#">Archive</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END OF /. BLOG CONTAINER SECTION -->

<div class="latest-blog-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel latest-blog-slider" id="latest-blog">
                    <div class="item">
                        <div class="blog-items">
                            <a href="#">
                                <img src="/assets/images/blog/b-single-3.jpg" alt="" />
                                <div class="blog-content-title">
                                    <span>Euro 2016</span>
                                    <h3>Fernando Santos's Portugal manifesto</h3>
                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-items">
                            <a href="#">
                                <img src="/assets/images/blog/b-single-4.jpg" alt="" />
                                <div class="blog-content-title">
                                    <span>Euro 2016</span>
                                    <h3>Fernando Santos's Portugal manifesto</h3>
                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-items">
                            <a href="#">
                                <span>Euro 2016</span>
                                <img src="/assets/images/blog/b-single-3.jpg" alt="" />
                                <div class="blog-content-title">
                                    <h3>Fernando Santos's Portugal manifesto</h3>
                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('guest.html.twitter-section')
@endsection

