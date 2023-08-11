@extends('guest.layout')
@section('main-content')

    <div class="club-histry-feature-section">
        <div class="container">
            <div class="row">
                <div class="inner-container">
                    <div class="col-sm-2">
                        <div class="club-histry-img">
                            <a href="#"><img class="img-responsive" src="/assets/images/club-img.png" width="169" height="222" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="club-histry">
                            <h1>Club <b>History</b></h1>
                            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. </p>
                            <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend </p>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="club-histry">
                            <h1>Main <b>Features</b></h1>
                        </div>
                        <div class="club-details">
                            <div class="club-name club-details-inner">
                                <h1>Legacy (Italy)</h1>
                                <p>Football Club</p>
                            </div>
                            <div class="coach-name club-details-inner">
                                <h1>Coach</h1>
                                <p>Zinedine Zidane</p>
                            </div>
                        </div>
                        <div class="club-details">
                            <div class="start-time club-details-inner">
                                <h1>Established</h1>
                                <p>Since 1993</p>
                            </div>
                            <div class="president-name club-details-inner">
                                <h1>Curent President</h1>
                                <p>Jose Angel Sanchez</p>
                            </div>
                        </div>
                        <div class="club-details">
                            <div class="stadium-name club-details-inner">
                                <h1>Arena / Stadium</h1>
                                <p>Santiago Bernabeu</p>
                            </div>
                            <div class="club-social club-details-inner">
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
    <div class="club-play-histry">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">Photos</a></li>
                        <li role="presentation"><a href="#squad" aria-controls="squad" role="tab" data-toggle="tab">Squad</a></li>
                        <li role="presentation"><a href="#honours" aria-controls="honours" role="tab" data-toggle="tab">Honours</a></li>
                        <li role="presentation"><a href="#management" aria-controls="management" role="tab" data-toggle="tab">Management</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="photos">
                            <div class="player-total-details">
                                <div class="player-inner player-name-img">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/1.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#11</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>DR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Centre-back <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/2.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#16</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country2.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>FR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Sweeper <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/3.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#18</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country3.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IS</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Full-back <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/4.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#20</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country4.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IE</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Centre forward <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>
                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/5.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#11</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>DR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Second striker <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/6.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#16</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country2.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>FR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Winger <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/7.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#18</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country3.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IS</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Goalkeeper <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/8.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#20</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country4.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IE</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Defensive <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="squad">
                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/9.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#16</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country2.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>FR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Sweeper <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/1.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#18</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country3.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IS</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Full-back <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/2.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#20</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country4.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IE</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Centre forward <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>
                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/3.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#11</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>DR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Second striker <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="honours">
                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/4.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#11</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>DR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Centre-back <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/5.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#16</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country2.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>FR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Sweeper <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/6.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#18</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country3.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IS</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Full-back <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/7.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#20</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country4.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IE</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Centre forward <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>
                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/8.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#11</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>DR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Second striker <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/9.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#16</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country2.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>FR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Winger <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/1.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#18</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country3.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IS</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Goalkeeper <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/2.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#20</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country4.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IE</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Defensive <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="management">
                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/3.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#18</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country3.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IS</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Full-back <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/4.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#20</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country4.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IE</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Centre forward <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>
                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/5.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#11</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>DR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Second striker <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/6.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#16</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country2.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>FR</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Winger <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/7.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#18</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country3.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IS</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Goalkeeper <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>

                            <div class="player-total-details">
                                <div class="player-name-img player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player/8.jpg" width="70" height="70" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption1">
                                        <h3>#20</h3>
                                        <p>Henry Anderbal</p>
                                    </div>
                                </div>
                                <div class="player-country player-inner">
                                    <div class="profile-image">
                                        <a href="#"><img src="/assets/images/player-country4.png" width="36" height="36" alt=""></a>
                                    </div>
                                    <div class="profile-caption profile-caption2">
                                        <p>IE</p>
                                    </div>
                                </div>
                                <div class="player-position player-inner">
                                    <h3>Defensive <i class="fa fa-street-view" aria-hidden="true"></i></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('guest.html.twitter-section')
@endsection
