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
                                <img src="{{$blog->thumbnail}}" alt="" class="img-responsive">
                                <span>{{$blog->league->name}}</span>
                            </div>
                            <div class="blog-single-content-title">
                                <h3>{{$blog->title}}</h3>
                                <span><i class="fa fa-clock-o"></i>  {{$blog->publish_date}} <i class="fa fa-comments"></i> 16 </span>
                                <ul class="blog-share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                            {!! $blog->content !!}
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

                                    @foreach($today_on_sport as $key=> $item)


                                        <div class="item  {{$key==0?'active':''}}">
                                            <ul class="sport-item">
                                                <li>
                                                    <a href="{{url("/blog-detail",["blog"=>$item->id])}}">
                                                        <img src="{{$item->thumbnail}}" class="img-responsive" width="310" height="220" alt="">
                                                        <h3>{{$item->title}}</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- end of slider /. item -->
                                    @endforeach


                                </div>
                                <ol class="carousel-indicators sport-item slider-game-time">
                                    @foreach($today_on_sport_footter as $key=> $item)


                                        <li data-target="#carousel-example-generic" data-slide-to="0" class=" {{$key==0?'active':''}}">
                                            <a href="{{url("/blog-detail",["blog"=>$item->id])}}">
                                                <span>{{$item->publish_date}}</span>
                                                <p>{{$item->title}}</p>
                                            </a>
                                        </li>
                                    @endforeach

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
                                @foreach($last_new_slider as  $item)

                                    <div class="blog-items-sm latest-blog">
                                        <a href="{{url("/blog-detail",["blog"=>$item->id])}}">
                                            <div class="thumbnail">
                                                <img src="{{$item->thumbnail}}" class="img-responsive" width="120" height="120" alt="">
                                            </div>
                                            <div class="blog-content">
                                                <span>{{$item->league->name}}</span>
                                                <h3>{{$item->title}}</h3>
                                                <p><i class="fa fa-clock-o"></i>  {{$item->publish_date}}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-title">
                            <h3>League</h3>
                        </div>
                        <div class="widget-container">
                            <ul class="cat">
                                @foreach($league as $item)
                                    <li><a href="/">{{$item->name}}</a></li>
                                @endforeach

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

