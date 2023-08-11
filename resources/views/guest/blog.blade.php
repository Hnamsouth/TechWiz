@extends('guest.layout')
@section('main-content')
    @include('guest.html.twitter-section')
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
                                        <img src="{{$item->thumbnail}}" alt="" />
                                        <div class="blog-content-title">
                                            <h3>{{$item->title}}</h3>
                                            <span><i class="fa fa-clock-o"></i> {{$item->publish_date}}  <i class="fa fa-comments"></i> 16 </span>
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
                                        <img src="{{$item->thumbnail}}" alt="" />
                                        <div class="blog-content-title">
                                            <h3>{{$item->title}}</h3>
                                            <span><i class="fa fa-clock-o"></i> {{$item->publish_date}}<i class="fa fa-comments"></i> 16 </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                                @endforeach

                            <div class="col-md-12">
                                <nav aria-label="Page navigation" class="navigation">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                <span aria-hidden="true">Prev</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">Next</span>
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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
                                        <a href="blog-single.html">
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
                                        <a href="blog-single.html">
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
                                        <a href="blog-single.html">
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

@endsection
