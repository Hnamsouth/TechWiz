@extends('guest.layout')
@section('main-content')
    @include('guest.html.slider-section')

    <!-- START MAIN CONTANER -->
    <div class="section blog-container-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-section">
                                    <h2>Football <b>Feed</b></h2>
                                    <a href="#">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div><!-- end /. title section -->
                            </div><!-- end of /. col -->
                        </div><!-- end of /. row -->

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
                            @endforeach<!-- end of /. col -->
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
                            <div class="col-md-6">
                                <div class="title-section sm-title">
                                    <h2>Top <b>Player</b></h2>
                                    <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div><!-- end of /. col -->
                                <div class="blog-items">
                                    <div class="owl-carousel top-player" id="player">
                                        <div class="item">
                                            <a href="#">
                                                <span>Euro 2016</span>
                                                <img src="/assets/images/player.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>David Beckham</h3>
                                                    <span><i class="fa fa-male"></i> Halfback </span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <span>Euro 2016</span>
                                                <img src="/assets/images/player.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>David Beckham</h3>
                                                    <span><i class="fa fa-male"></i> Halfback </span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <span>Euro 2016</span>
                                                <img src="/assets/images/player.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>David Beckham</h3>
                                                    <span><i class="fa fa-male"></i> Halfback </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="player-navigation arrow-style">
                                        <button class="player-next"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                        <button class="player-prev"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-section sm-title">
                                    <h2>Our <b>Polls</b></h2>
                                    <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="blog-items our-polls">
                                    <div class="poll-item">
                                        <h3>Are Fernando Santos's Best Footballer in the team?</h3>
                                        <ul>
                                            <li>
                                                <input type="radio" id="a-option" name="selector">
                                                <label for="a-option">Some Poll Option</label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="b-option" name="selector">
                                                <label for="b-option">Some Poll Option</label>
                                                <div class="check"><div class="inside"></div></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="c-option" name="selector">
                                                <label for="c-option">Some Poll Option</label>
                                                <div class="check"><div class="inside"></div></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="d-option" name="selector">
                                                <label for="d-option">Some Poll Option</label>
                                                <div class="check"><div class="inside"></div></div>
                                            </li>
                                        </ul>
                                        <a href="#">Submit My Answer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of /. blog container -->
                </div><!-- end of /. col -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="widget-title">
                                <h3>Recent Result</h3>
                                <div class="recent-navigation arrow-style">
                                    <button class="recent-re-next"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                    <button class="recent-re-prev"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="widget-container">
                                <div class="owl-carousel" id="recent-result">
{{--              hien thi cac tran dau da xong cua moi giai                      --}}
                                    @foreach($leagueSeasonList as $ls)
                                        @if($ls->Matches->count() >0)
                                            <div class="item">
                                                @foreach($ls->Matches->take(4) as $m )
                                                    @if($m->status)
                                                        <div class="recent-items" >
                                                            <a href="{{route('match_rs',['match'=>$m->id])}}">
                                                                <h4>{{$m->datetime}}</h4>
                                                                <div class="result-coutry-area">
                                                                    <div class="result-item">
                                                                        <p>Team{{$m->FirstTeam->id}}</p>
                                                                        <img src="{{$m->FirstTeam->logo}}" alt="" />
                                                                    </div>
                                                                    <div class="result-item">
                                                                        <p style="font-size:16px;font-family: system-ui;"><span style="font-weight:600">{{$m->MatchResult[0]->goal}}({{$m->MatchResult[0]->penalty_shootout_goal}})</span> - {{$m->MatchResult[1]->goal}}({{$m->MatchResult[1]->penalty_shootout_goal}})</p>
                                                                    </div>
                                                                    <div class="result-item">
                                                                        <img src="{{$m->SecondTeam->logo}}" alt="" />
                                                                        <p>Team {{$m->SecondTeam->id}}</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div><!-- end of /. item -->
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div><!-- end of /. widget -->
                        <div class="widget">
                            <div class="widget-title">
                                <h3>Club Ranking</h3>
                                <div class="custom-navigation arrow-style">
                                    <button class="club-rank-perv"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                    <button class="club-rank-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="widget-container">
                                <div class="owl-carousel" id="club-rank">
                                    <div class="item">
                                        <div class="club-items">
                                            <span>1</span>
                                            <div class="club-logo">
                                                <img src="/assets/images/club1.png" width="21" height="28" alt="">
                                            </div>
                                            <p>Legacy</p>
                                            <b>86</b>
                                        </div>
                                        <div class="club-items">
                                            <span>2</span>
                                            <div class="club-logo">
                                                <img src="/assets/images/club2.png" width="21" height="28" alt="">
                                            </div>
                                            <p>Teamfoot</p>
                                            <b>64</b>
                                        </div>
                                        <div class="club-items">
                                            <span>3</span>
                                            <div class="club-logo">
                                                <img src="/assets/images/club3.png" width="21" height="28" alt="">
                                            </div>
                                            <p>Real M.</p>
                                            <b>68</b>
                                        </div>
                                        <div class="club-items">
                                            <span>4</span>
                                            <div class="club-logo">
                                                <img src="/assets/images/club4.png" width="21" height="28" alt="">
                                            </div>
                                            <p>Foolianto</p>
                                            <b>72</b>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="club-items">
                                            <span>1</span>
                                            <div class="club-logo">
                                                <img src="/assets/images/club1.png" width="21" height="28" alt="">
                                            </div>
                                            <p>Legacy</p>
                                            <b>86</b>
                                        </div>
                                        <div class="club-items">
                                            <span>2</span>
                                            <div class="club-logo">
                                                <img src="/assets/images/club2.png" width="21" height="28" alt="">
                                            </div>
                                            <p>Teamfoot</p>
                                            <b>64</b>
                                        </div>
                                        <div class="club-items">
                                            <span>3</span>
                                            <div class="club-logo">
                                                <img src="/assets/images/club3.png" width="21" height="28" alt="">
                                            </div>
                                            <p>Real M.</p>
                                            <b>68</b>
                                        </div>
                                        <div class="club-items">
                                            <span>4</span>
                                            <div class="club-logo">
                                                <img src="/assets/images/club4.png" width="21" height="28" alt="">
                                            </div>
                                            <p>Foolianto</p>
                                            <b>72</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of /. widget -->
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
                                    <ol class="sport-item slider-game-time">
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
                        </div><!-- end of /. widget -->
                    </div><!-- end of /. sidebar -->
                </div><!-- end of /. col -->
            </div><!-- end of /. row -->
        </div><!-- end of /. container -->
    </div><!-- end of /. blog container section -->

    <!-- START NEWS LATTER SECTION -->
    <div class="news-latter-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="news-latter-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="new-latter-area">
                                    <div class="news-latter-title">
                                        <h2>Sign Up <b>for the Newsletter</b></h2>
                                    </div>
                                </div>
                            </div><!-- end of /. col -->
                        </div><!-- end of /. row -->
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="sub-title">
                                    <p>Vivamus quis mi. Phasellus a est. Phasellus magna. In hac abitasse platea dictumst. Curabitur at lacus. </p>
                                </div>
                            </div><!-- end of /. col -->
                            <div class="col-lg-5 col-md-12">
                                <div class="subscribe-area">
                                    <form action="#" class="form-inline">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your e-mail"  />
                                        </div>
                                        <input type="submit" value="Sign Up" class="submit-btn" />
                                    </form>
                                </div>
                            </div><!-- end of /. col -->
                        </div><!-- end of /. row -->
                    </div><!-- end of /. news title area -->

                </div><!-- end of /. col-md-6 -->
                <div class="col-md-3">
                    <div class="social-area facebook-box">
                        <h2>Join to <b>our Facebook</b></h2>
                        <div class="social-link">
                            <div class="fb-like" data-href="https://www.facebook.com/webRedox/?__mref=message" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                        </div>
                    </div>
                </div><!-- end of /. col -->
                <div class="col-md-3">
                    <div class="social-area twitter-box">
                        <h2>Join to <b>our Twitter</b></h2>
                        <div class="social-link">
                            <iframe allowtransparency="true" frameborder="0" scrolling="no"
                                    src="/assets/https://platform.twitter.com/widgets/follow_button.html?screen_name=webRedox&show_screen_name=true&show_count=true"
                                    style="height:20px;"></iframe>

                            <script src="/assets/https://platform.twitter.com/widgets.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                twttr.events.bind('follow', function(event) {
                                    console.log(event);
                                    var followed_user_id = event.data.user_id;
                                    var followed_screen_name = event.data.screen_name;
                                });
                            </script>
                        </div>
                    </div>
                </div><!-- end of /. col -->
            </div><!-- end of /. row -->
        </div><!-- end of /. container -->
    </div><!-- end of /. social section -->

    <!-- start blog container 2 -->
    <div class="section blog-container-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-section">
                                    <h2>Latest <b>News</b></h2>
                                    <ul class="filter-menu button-group sort-button-group">
                                        <li class="button active" data-category="all">All</li>
                                        <li class="button" data-category="team">The Team</li>
                                        <li class="button" data-category="uefa-2016">Uefa 2016</li>
                                        <li class="button" data-category="uefa-2017">UEFA 2017</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row work">
                            <div class="col-md-6 work-item team">
                                <div class="blog-items">
                                    <a href="blog-single.html">
                                        <span>Euro 2016</span>
                                        <img src="/assets/images/blog/2.jpg" alt="" />
                                        <div class="blog-content-title">
                                            <h3>UEFA EURO 2016 Team of the Tournament</h3>
                                            <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 work-item uefa-2017">
                                <div class="blog-items">
                                    <a href="blog-single.html">
                                        <span>Euro 2016</span>
                                        <img src="/assets/images/blog/3.jpg" alt="" />
                                        <div class="blog-content-title">
                                            <h3>On bringing in younger players</h3>
                                            <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 work-item team">
                                <div class="blog-items-sm">
                                    <a href="blog-single.html">
                                        <div class="thumbnail">
                                            <img src="/assets/images/blog/s1.jpg" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <span>Euro 2016</span>
                                            <h3>Lukas Podolski retires from Germany duty</h3>
                                            <p><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 work-item uefa-2016">
                                <div class="blog-items-sm">
                                    <a href="blog-single.html">
                                        <div class="thumbnail">
                                            <img src="/assets/images/blog/s2.jpg" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <span>Euro 2016</span>
                                            <h3>Lukas Podolski retires from Germany duty</h3>
                                            <p><i class="fa fa-clock-o"></i> 12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 work-item  uefa-2017">
                                <div class="blog-items-sm">
                                    <a href="blog-single.html">
                                        <div class="thumbnail">
                                            <img src="/assets/images/blog/s3.jpg" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <span>Euro 2016</span>
                                            <h3>Youngest German to reach 100 caps</h3>
                                            <p><i class="fa fa-clock-o"></i> 12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 work-item uefa-2016">
                                <div class="blog-items-sm">
                                    <a href="blog-single.html">
                                        <div class="thumbnail">
                                            <img src="/assets/images/blog/s4.jpg" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <span>Euro 2016</span>
                                            <h3>Podolski's top five moments for Germany</h3>
                                            <p><i class="fa fa-clock-o"></i> 12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of /. col-md-8 -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="widget-title">
                            </div>
                            <div class="social-like-area">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i> <span>108608   Likes</span> <i class="fa fa-arrow-circle-o-right"></i> </a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> <span>108608   Followers</span> <i class="fa fa-arrow-circle-o-right"></i> </a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i> <span>1802   Followers</span> <i class="fa fa-arrow-circle-o-right"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="sidebar-ad">
                                <a href="#">
                                    <img src="/assets/images/banner.jpg" class="img-responsive" width="370" height="571" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- end of /. col -->
            </div><!-- end of /. row -->
        </div><!-- end of /. container -->
    </div><!-- end of /. blog container 2 -->
@endsection
