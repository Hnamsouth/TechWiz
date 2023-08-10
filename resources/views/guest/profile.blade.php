
@extends('guest.layout')
@section('main-content')

    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Player Profile</h1>
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

    <div class="player-carear-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="profile-images-match">
                        <a href="#"><img class="img-responsive" src="/assets/images/player.jpg" width="370" height="370" alt=""></a>
                        <div class="profile-details">
                            <div class="profile-pic profile-details-inner">
                                <a href="#"><img class="img-responsive" src="/assets/images/fixture-team2.png" width="64" height="84" alt=""></a>
                            </div>
                            <div class="carryer-match profile-details-inner">
                                <h2>24</h2>
                                <p>Matched Played</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="player-carryer-total-des">
                        <h1 id="profile-title">Garry <b>Oldman <span>#21</span></b></h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="player-description">
                                    <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.</p>
                                    <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed.</p>
                                    <p>Nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="player-other-desc-inner">
                                    <div class="player-desc-1">
                                        <div class="player-other-desc">
                                            <h1>Legacy (Italy)</h1>
                                            <p>Football Club</p>
                                        </div>
                                        <div class="player-other-desc">
                                            <h1>Date of Birth</h1>
                                            <p>16 Aug, 1993</p>
                                        </div>
                                        <div class="player-other-desc">
                                            <h1>Height & Weight</h1>
                                            <p>184cm , 96kg</p>
                                        </div>
                                    </div>

                                    <div class="player-desc-1">
                                        <div class="player-other-desc">
                                            <h1>Full Name</h1>
                                            <p>Garry Oldman Downy</p>
                                        </div>
                                        @foreach($latest_players as $item)
                                        <div class="player-other-desc">
                                            <h1>Nationality</h1>
                                            <p>{{$item->nationality}}</p>
                                        </div>
                                        @endforeach
                                        <div class="player-other-desc">
                                            <h1>Social</h1>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="player-performances">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="player-states">
                        <h1 class="before">Player <b>Stats</b></h1>
                        <div class="skillst1">
                            <div class="skillbar-items">
                                <div class="title">General</div>
                                <div class="skillbar progress" data-percent="24%">
                                    <div class="count"></div>
                                    <div class="count-bar progress-bar progress-bar-striped"></div>
                                </div>
                            </div>
                            <div class="skillbar-items">
                                <div class="title">Attack</div>
                                <div class="skillbar progress" data-percent="82%">
                                    <div class="count"></div>
                                    <div class="count-bar progress-bar progress-bar-striped"></div>
                                </div>
                            </div>
                            <div class="skillbar-items">
                                <div class="title">Defence</div>
                                <div class="skillbar progress" data-percent="40%">
                                    <div class="count"></div>
                                    <div class="count-bar progress-bar progress-bar-striped"></div>
                                </div>
                            </div>
                            <div class="skillbar-items">
                                <div class="title">Discipline</div>
                                <div class="skillbar progress" data-percent="64%">
                                    <div class="count"></div>
                                    <div class="count-bar progress-bar progress-bar-striped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="player-states">
                        <h1 class="before">Player <b>Performance</b></h1>
                        <div class="player-performance-inner player-performance">
                            <div class="circle-proggress-items">
                                <div id="demo-pie-1" class="pie-title-center" data-percent="56"> <span class="pie-value"></span> </div>
                                <span class="progress-content"><B>Games Won</B></span>
                            </div>
                            <div class="circle-proggress-items">
                                <div id="demo-pie-2" class="pie-title-center" data-percent="64"> <span class="pie-value"></span> </div>
                                <span class="progress-content"><B>Matches Activity</B></span>
                            </div>
                            <div class="circle-proggress-items">
                                <div id="demo-pie-3" class="pie-title-center" data-percent="38"> <span class="pie-value"></span> </div>
                                <span class="progress-content"><B>Membership Value</B></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="instagram-section">
        <!-- LightWidget WIDGET -->
        <script src="/assets/http://lightwidget.com/widgets/lightwidget.js"></script>
        <iframe src="/assets/http://lightwidget.com/widgets/f58c7339f2bd50d7baa7a3d22812f2cf.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

        <div class="carry-olpdman-btn">
            <a href="#"><i class="fa fa-instagram"></i> Visit @CarryOldman</a>
        </div><!-- end /. instragram profile -->
    </div> <!-- end .instagram-section -->

    @include('guest.html.twitter-section')
@endsection
