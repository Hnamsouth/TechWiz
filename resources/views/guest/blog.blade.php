@extends('guest.layout')
@section('main-content')
{{--        @include('guest.html.twitter-section')--}}
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>NEWS</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">News</a></li>
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
                            @foreach($last_new as $item)
                                <div class="col-md-12">
                                    <div class="blog-items">
                                        <a href="{{url("/blog-detail",["blog"=>$item->id])}}">
                                            <span>{{$item->league->name}}</span>
                                            <img src="{{$item->thumbnail}}" alt=""/>
                                            <div class="blog-content-title">
                                                <h3>{{$item->title}}</h3>
                                                <span><i class="fa fa-clock-o"></i> {{$item->publish_date}}  <i
                                                        class="fa fa-comments"></i> 16 </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            @foreach($second_new as $item)

                                <div class="col-md-6">
                                    <div class="blog-items">
                                        <a href="{{url("/blog-detail",["blog"=>$item->id])}}">
                                            <span>{{$item->league->name}}</span>
                                            <img src="{{$item->thumbnail}}" alt=""/>
                                            <div class="blog-content-title">
                                                <h3>{{$item->title}}</h3>
                                                <span><i class="fa fa-clock-o"></i> {{$item->publish_date}}<i
                                                        class="fa fa-comments"></i> 16 </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                            {{--                            <div class="col-md-12">--}}
                            {{--                                <nav aria-label="Page navigation" class="navigation">--}}
                            {{--                                    <ul class="pagination">--}}
                            {{--                                        <li>--}}
                            {{--                                            <a href="#" aria-label="Previous">--}}
                            {{--                                                <i class="fa fa-chevron-left" aria-hidden="true"></i>--}}
                            {{--                                                <span aria-hidden="true">Prev</span>--}}
                            {{--                                            </a>--}}
                            {{--                                        </li>--}}
                            {{--                                        <li><a href="#">1</a></li>--}}
                            {{--                                        <li class="active"><a href="#">2</a></li>--}}
                            {{--                                        <li><a href="#">3</a></li>--}}
                            {{--                                        <li><a href="#">4</a></li>--}}
                            {{--                                        <li><a href="#">5</a></li>--}}
                            {{--                                        <li>--}}
                            {{--                                            <a href="#" aria-label="Next">--}}
                            {{--                                                <span aria-hidden="true">Next</span>--}}
                            {{--                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>--}}
                            {{--                                            </a>--}}
                            {{--                                        </li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </nav>--}}
                            {{--                            </div>--}}
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
                                                            <img src="{{$item->thumbnail}}" class="img-responsive"
                                                                 width="310" height="220" alt="">
                                                            <h3>{{$item->title}}</h3>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- end of slider /. item -->
                                        @endforeach


                                    </div>
                                    <ol class="carousel-indicators sport-item slider-game-time">
                                        @foreach($today_on_sport_footter as $key=> $item)

                                            <li data-target="#carousel-example-generic" data-slide-to="0"
                                                class=" {{$key==0?'active':''}}">
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
                                                    <img src="{{$item->thumbnail}}" class="img-responsive" width="120"
                                                         height="120" alt="">
                                                </div>
                                                <div class="blog-content">
                                                    <span>{{$item->league->name}}</span>
                                                    <h3>{{$item->title}}</h3>
                                                    <p><i class="fa fa-clock-o"></i> {{$item->publish_date}}</p>
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

@endsection
