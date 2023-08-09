@extends('guest.layout')
@section('main-content')
    <div class="main">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--************************************
                Wrapper Start
        *************************************-->
        <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
            <!--************************************
                    Mobile Menu Start
            *************************************-->
            <div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
                <span id="tg-close" class="tg-close fa fa-close"></span>
                <div class="tg-colhalf">
                    <ul>
                        <li class="active menu-item-has-children">
                            <a href="#">Main</a>
                            <ul class="tg-dropdown-menu">
                                <li class="active"><a href="index-2.html">home1</a></li>
                                <li><a href="index2.html">home2</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">team</a>
                            <ul class="tg-dropdown-menu">
                                <li><a href="playergrid-v1.html">playergrid-v1</a></li>
                                <li><a href="playergrid-v2.html">playergrid-v2</a></li>
                                <li><a href="playerdetail.html">playergrid detail</a></li>
                            </ul>
                        </li>
                        <li><a href="buyticket.html">Buy Tickets</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Match Results</a>
                            <ul class="tg-dropdown-menu">
                                <li><a href="matchresult.html">match result</a></li>
                                <li><a href="matchresultdetail.html">match result detail</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tg-colhalf">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">fixtures</a>
                            <ul class="tg-dropdown-menu">
                                <li><a href="fixtures.html">fixtures</a></li>
                                <li><a href="fixturedetail.html">fixture detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">pro soccer media</a>
                            <ul class="tg-dropdown-menu">
                                <li><a href="soccermedia-1.html">pro soccer media1</a></li>
                                <li><a href="soccermedia-2.html">pro soccer media2</a></li>
                            </ul>
                        </li>
                        <li><a href="contactus.html">Contact</a></li>
                        <li class="menu-item-has-children">
                            <a href="#"><i class=" fa fa-navicon"></i></a>
                            <ul>
                                <li><a href="aboutus.html">about us</a></li>
                                <li><a href="shoplist.html">shop list</a></li>
                                <li><a href="shopgrid.html">shop grid</a></li>
                                <li><a href="productsingle.html">shop detail</a></li>
                                <li><a href="bloglist.html">blog list</a></li>
                                <li><a href="bloggrid.html">blog grid</a></li>
                                <li><a href="blogdetail.html">blog detail</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="comming-soon.html">comming soon</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--************************************
                    Mobile Menu End
            *************************************-->
            <!--************************************
                    Header Start
            *************************************-->

            <!--************************************
                    Header End
            *************************************-->
            <!--************************************
                    Home Slider Start
            *************************************-->
            <div class="tg-sliderbox">
                <div class="tg-imglayer">
                    <img src="assets/images/bg-pattran.png" alt="image desctription">
                </div>
                <div id="tg-home-slider" class="tg-home-slider tg-haslayout">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="container">
                                <figure class="floating">
                                    <img src="assets/images/slider/img-01.png" alt="image description">
                                </figure>
                                <div class="tg-slider-content">
                                    <h1>alive and <span>kickin</span></h1>
                                    <div class="tg-btnbox">
                                        <h2>from june 27</h2>
                                        <a class="tg-btn" href="#"><span>read more</span></a>
                                        <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <figure class="floating">
                                    <img src="assets/images/slider/img-01.png" alt="image description">
                                </figure>
                                <div class="tg-slider-content">
                                    <h1>alive and <span>kickin</span></h1>
                                    <div class="tg-btnbox">
                                        <h2>from june 27</h2>
                                        <a class="tg-btn" href="#"><span>read more</span></a>
                                        <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <figure class="floating">
                                    <img src="assets/images/slider/img-01.png" alt="image description">
                                </figure>
                                <div class="tg-slider-content">
                                    <h1>alive and <span>kickin</span></h1>
                                    <div class="tg-btnbox">
                                        <h2>from june 27</h2>
                                        <a class="tg-btn" href="#"><span>read more</span></a>
                                        <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tg-btn-next">
                        <span>next</span>
                        <span class="fa fa-angle-down"></span>
                    </div>
                    <div class="tg-btn-prev">
                        <span>prev</span>
                        <span class="fa fa-angle-down"></span>
                    </div>
                </div>
            </div>
            <!--************************************
                    Home Slider End
            *************************************-->
            <!--************************************
                    Main Start
            *************************************-->
            <main id="tg-main" class="tg-main tg-haslayout">
                <!--************************************
                        About Us Start
                *************************************-->
                <section class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="tg-section-name">
                            <h2>About pro soccer</h2>
                        </div>
                        <div class="col-sm-11 col-xs-11 pull-right">
                            <div class="row">
                                <div class="tg-aboutussection">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <figure>
                                                <img src="assets/images/img-01.jpg" alt="image description">
                                            </figure>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="tg-contentbox">
                                                <div class="tg-section-heading"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                                </div>
                                                <div class="tg-btnbox">
                                                    <a class="tg-btn" href="#"><span>read more</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        About Us End
                *************************************-->
                <!--************************************
                        Upcoming Match Start
                *************************************-->
                <section class=" tg-haslayout tg-bgstyleone">
                    <div class="tg-bgboxone"></div>
                    <div class="tg-bgboxtwo"></div>
                    <div class="tg-bgpattrant">
                        <div class="container">
                            <div class="row">
                                <div class="tg-upcomingmatch-counter">
                                    <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                        <figure>
                                            <img src="assets/images/img-02.png" alt="image description">
                                        </figure>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="tg-contentbox">
                                            <div class="tg-section-heading"><h2>Gladiators <span>VS</span> Horned Frogs</h2></div>
                                            <div class="tg-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <div class="tg-counters">
                                                <div class="tg-counter tg-days"></div>
                                                <div class="tg-counter tg-hours"></div>
                                                <div class="tg-counter tg-minutes"></div>
                                                <div class="tg-counter tg-seconds"></div>
                                            </div>
                                            <div class="tg-btnbox">
                                                <a class="tg-btn" href="#"><span>read more</span></a>
                                                <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Upcoming Match End
                *************************************-->
                <!--************************************
                        Latest Result Start
                *************************************-->
                <section class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="tg-section-name">
                            <h2>latest result</h2>
                        </div>
                        <div class="col-sm-11 col-xs-11 pull-right">
                            <div class="row">
                                <div class="tg-latestresult">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <div class="tab-content tg-tabscontent">
                                                <div role="tabpanel" class="tab-pane active" id="one">
                                                    <div class="tg-matchresult">
                                                        <div class="tg-box">
                                                            <div class="tg-score"><h3>3 - 3</h3></div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-01.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">Gladiators ( Win )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Roman Fenley (15)</li>
                                                                    <li>Miguel Beckel (19)</li>
                                                                    <li>Jonah Jolicoeur (39)</li>
                                                                    <li>Connie Harland (48)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-02.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">horned grogs ( lose )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Ethan Ryberg (22)</li>
                                                                    <li>Wilbert Delbosquel (27)</li>
                                                                    <li>Maynard Brabant (42)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="two">
                                                    <div class="tg-matchresult">
                                                        <div class="tg-box">
                                                            <div class="tg-score"><h3>7 - 3</h3></div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-01.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">Gladiators ( Win )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Roman Fenley (15)</li>
                                                                    <li>Miguel Beckel (19)</li>
                                                                    <li>Jonah Jolicoeur (39)</li>
                                                                    <li>Connie Harland (48)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-02.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">horned grogs ( lose )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Ethan Ryberg (22)</li>
                                                                    <li>Wilbert Delbosquel (27)</li>
                                                                    <li>Maynard Brabant (42)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="three">
                                                    <div class="tg-matchresult">
                                                        <div class="tg-box">
                                                            <div class="tg-score"><h3>4 - 9</h3></div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-01.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">Gladiators ( Win )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Roman Fenley (15)</li>
                                                                    <li>Miguel Beckel (19)</li>
                                                                    <li>Jonah Jolicoeur (39)</li>
                                                                    <li>Connie Harland (48)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-02.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">horned grogs ( lose )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Ethan Ryberg (22)</li>
                                                                    <li>Wilbert Delbosquel (27)</li>
                                                                    <li>Maynard Brabant (42)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="four">
                                                    <div class="tg-matchresult">
                                                        <div class="tg-box">
                                                            <div class="tg-score"><h3>5 - 8</h3></div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-01.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">Gladiators ( Win )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Roman Fenley (15)</li>
                                                                    <li>Miguel Beckel (19)</li>
                                                                    <li>Jonah Jolicoeur (39)</li>
                                                                    <li>Connie Harland (48)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-02.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">horned grogs ( lose )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Ethan Ryberg (22)</li>
                                                                    <li>Wilbert Delbosquel (27)</li>
                                                                    <li>Maynard Brabant (42)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="five">
                                                    <div class="tg-matchresult">
                                                        <div class="tg-box">
                                                            <div class="tg-score"><h3>2 - 1</h3></div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-01.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">Gladiators ( Win )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Roman Fenley (15)</li>
                                                                    <li>Miguel Beckel (19)</li>
                                                                    <li>Jonah Jolicoeur (39)</li>
                                                                    <li>Connie Harland (48)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-02.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">horned grogs ( lose )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Ethan Ryberg (22)</li>
                                                                    <li>Wilbert Delbosquel (27)</li>
                                                                    <li>Maynard Brabant (42)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="six">
                                                    <div class="tg-matchresult">
                                                        <div class="tg-box">
                                                            <div class="tg-score"><h3>10 - 0</h3></div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-01.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">Gladiators ( Win )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Roman Fenley (15)</li>
                                                                    <li>Miguel Beckel (19)</li>
                                                                    <li>Jonah Jolicoeur (39)</li>
                                                                    <li>Connie Harland (48)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-02.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">horned grogs ( lose )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Ethan Ryberg (22)</li>
                                                                    <li>Wilbert Delbosquel (27)</li>
                                                                    <li>Maynard Brabant (42)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="seven">
                                                    <div class="tg-matchresult">
                                                        <div class="tg-box">
                                                            <div class="tg-score"><h3>4 - 6</h3></div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-01.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">Gladiators ( Win )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Roman Fenley (15)</li>
                                                                    <li>Miguel Beckel (19)</li>
                                                                    <li>Jonah Jolicoeur (39)</li>
                                                                    <li>Connie Harland (48)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="tg-teamscore">
                                                                <strong class="tg-team-logo">
                                                                    <a href="#">
                                                                        <img src="assets/images/team-logo/logo-02.png" alt="image description">
                                                                    </a>
                                                                </strong>
                                                                <div class="tg-team-nameplusstatus">
                                                                    <h4><a href="#">horned grogs ( lose )</a></h4>
                                                                </div>
                                                                <ul class="tg-playernameplusgoadtime">
                                                                    <li>Ethan Ryberg (22)</li>
                                                                    <li>Wilbert Delbosquel (27)</li>
                                                                    <li>Maynard Brabant (42)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div id="tg-matchscrollbar" class="tg-matchscrollbar tg-allmatchstatus">
                                                <ul class="tg-matchtabnav" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a href="#one" aria-controls="one" role="tab" data-toggle="tab">
                                                            <div class="tg-match">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>win</h4>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>6 - 4</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>lose</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#two" aria-controls="two" role="tab" data-toggle="tab">
                                                            <div class="tg-match">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>win</h4>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>6 - 4</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>lose</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#three" aria-controls="three" role="tab" data-toggle="tab">
                                                            <div class="tg-match">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>win</h4>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>6 - 4</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>lose</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#four" aria-controls="four" role="tab" data-toggle="tab">
                                                            <div class="tg-match">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>win</h4>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>6 - 4</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>lose</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#five" aria-controls="five" role="tab" data-toggle="tab">
                                                            <div class="tg-match">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>win</h4>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>6 - 4</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>lose</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#six" aria-controls="six" role="tab" data-toggle="tab">
                                                            <div class="tg-match">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>win</h4>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>6 - 4</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>lose</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#seven" aria-controls="seven" role="tab" data-toggle="tab">
                                                            <div class="tg-match">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>win</h4>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>6 - 4</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-s-01.png" alt="image description">
                                                                    </strong>
                                                                    <h4>lose</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tg-btnbox">
                                                <a class="tg-btn" href="#"><span>view all</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Latest Result End
                *************************************-->
                <!--************************************
                        Statistics Start
                *************************************-->
                <section class="tg-main-section tg-haslayout tg-bgdark">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="tg-statistics">
                                    <div class="tg-statistic tg-goals">
                                        <span class="tg-icon icon-Icon1"></span>
                                        <h2><span class="tg-statistic-count" data-from="0" data-to="2700" data-speed="8000" data-refresh-interval="50">2700</span></h2>
                                        <h3>Goals</h3>
                                    </div>
                                    <div class="tg-statistic tg-activeplayers">
                                        <span class="tg-icon icon-Icon2"></span>
                                        <h2><span class="tg-statistic-count" data-from="0" data-to="1673" data-speed="8000" data-refresh-interval="50">1673</span></h2>
                                        <h3>Active Players</h3>
                                    </div>
                                    <div class="tg-statistic tg-activeteams">
                                        <span class="tg-icon icon-Icon3"></span>
                                        <h2><span class="tg-statistic-count" data-from="0" data-to="236" data-speed="8000" data-refresh-interval="50">236</span></h2>
                                        <h3>Active Teams</h3>
                                    </div>
                                    <div class="tg-statistic tg-earnedawards">
                                        <span class="tg-icon icon-Icon4"></span>
                                        <h2><span class="tg-statistic-count" data-from="0" data-to="197" data-speed="8000" data-refresh-interval="50">197</span></h2>
                                        <h3>Earned Awards</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Statistics End
                *************************************-->
                <!--************************************
                        Fixtures Start
                *************************************-->
                <section class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="tg-section-name">
                            <h2>fixtures</h2>
                        </div>
                        <div class="col-sm-11 col-xs-11 pull-right">
                            <div class="row">
                                <div class="tg-latestresult">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                            <div class="tg-contentbox">
                                                <div class="tg-section-heading"><h2>consectetur adipisicing elit sedia tempor labore</h2></div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip ex ea commodo consequat.</p>
                                                </div>
                                                <div class="tg-btnbox">
                                                    <a class="tg-btn" href="#"><span>view all</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                            <div id="tg-upcomingmatch-slider" class="tg-upcomingmatch-slider tg-upcomingmatch">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="tg-match">
                                                            <div class="tg-matchdetail">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Gladiators</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>vs</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Horned frogs</h3>
                                                                </div>
                                                            </div>
                                                            <div class="tg-matchhover">
                                                                <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                                <div class="tg-btnbox">
                                                                    <a class="tg-btn" href="#"><span>read more</span></a>
                                                                    <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-match">
                                                            <div class="tg-matchdetail">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Gladiators</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>vs</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Horned frogs</h3>
                                                                </div>
                                                            </div>
                                                            <div class="tg-matchhover">
                                                                <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                                <div class="tg-btnbox">
                                                                    <a class="tg-btn" href="#"><span>read more</span></a>
                                                                    <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-match">
                                                            <div class="tg-matchdetail">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Gladiators</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>vs</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Horned frogs</h3>
                                                                </div>
                                                            </div>
                                                            <div class="tg-matchhover">
                                                                <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                                <div class="tg-btnbox">
                                                                    <a class="tg-btn" href="#"><span>read more</span></a>
                                                                    <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-match">
                                                            <div class="tg-matchdetail">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Gladiators</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>vs</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Horned frogs</h3>
                                                                </div>
                                                            </div>
                                                            <div class="tg-matchhover">
                                                                <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                                <div class="tg-btnbox">
                                                                    <a class="tg-btn" href="#"><span>read more</span></a>
                                                                    <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-match">
                                                            <div class="tg-matchdetail">
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Gladiators</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <h3>vs</h3>
                                                                </div>
                                                                <div class="tg-box">
                                                                    <strong class="tg-teamlogo">
                                                                        <img src="assets/images/team-logo/logo-l-02.png" alt="image description">
                                                                    </strong>
                                                                    <h3>Horned frogs</h3>
                                                                </div>
                                                            </div>
                                                            <div class="tg-matchhover">
                                                                <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                                <div class="tg-btnbox">
                                                                    <a class="tg-btn" href="#"><span>read more</span></a>
                                                                    <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                                <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Fixtures End
                *************************************-->
                <!--************************************
                        Video Start
                *************************************-->
                <section class="tg-videobox tg-haslayout">
                    <figure>
                        <img src="assets/images/bg-video.jpg" alt="image description">
                        <figcaption>
                            <a class="tg-playbtn" href="https://youtu.be/iC9CpnSj-MU?iframe=true" data-rel="prettyPhoto[iframe]"></a>
                            <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                        </figcaption>
                    </figure>
                </section>
                <!--************************************
                        Video End
                *************************************-->
                <!--************************************
                        Top Rated Player Start
                *************************************-->
                <section class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="tg-section-name">
                            <h2>top Rated Player</h2>
                        </div>
                        <div class="col-sm-11 col-xs-11 pull-right">
                            <div class="row">
                                <div class="tg-topratedplayer tg-haslayout">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                            <div id="tg-playerscrollbar" class="tg-players tg-playerscrollbar">
                                                <div class="tg-player">
                                                    <div class="col-sm-6 col-xs-6 pull-right">
                                                        <div class="tg-playcontent">
                                                            <a class="tg-theme-tag" href="#">SWEEPER</a>
                                                            <h3><a href="#">Hustlin’ Owls</a></h3>
                                                            <span class="tg-stars"><span></span></span>
                                                            <div class="tg-description">
                                                                <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                            </div>
                                                            <ul class="tg-socialicons">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/player/img-01.png" alt="image description">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="tg-player">
                                                    <div class="col-sm-6 col-xs-6 pull-right">
                                                        <div class="tg-playcontent">
                                                            <a class="tg-theme-tag" href="#">SWEEPER</a>
                                                            <h3><a href="#">Hustlin’ Owls</a></h3>
                                                            <span class="tg-stars"><span></span></span>
                                                            <div class="tg-description">
                                                                <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                            </div>
                                                            <ul class="tg-socialicons">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/player/img-02.png" alt="image description">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="tg-player">
                                                    <div class="col-sm-6 col-xs-6 pull-right">
                                                        <div class="tg-playcontent">
                                                            <a class="tg-theme-tag" href="#">SWEEPER</a>
                                                            <h3><a href="#">Hustlin’ Owls</a></h3>
                                                            <span class="tg-stars"><span></span></span>
                                                            <div class="tg-description">
                                                                <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                            </div>
                                                            <ul class="tg-socialicons">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/player/img-03.png" alt="image description">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="tg-player">
                                                    <div class="col-sm-6 col-xs-6 pull-right">
                                                        <div class="tg-playcontent">
                                                            <a class="tg-theme-tag" href="#">SWEEPER</a>
                                                            <h3><a href="#">Hustlin’ Owls</a></h3>
                                                            <span class="tg-stars"><span></span></span>
                                                            <div class="tg-description">
                                                                <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                            </div>
                                                            <ul class="tg-socialicons">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/player/img-01.png" alt="image description">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="tg-player">
                                                    <div class="col-sm-6 col-xs-6 pull-right">
                                                        <div class="tg-playcontent">
                                                            <a class="tg-theme-tag" href="#">SWEEPER</a>
                                                            <h3><a href="#">Hustlin’ Owls</a></h3>
                                                            <span class="tg-stars"><span></span></span>
                                                            <div class="tg-description">
                                                                <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                            </div>
                                                            <ul class="tg-socialicons">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/player/img-02.png" alt="image description">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="tg-player">
                                                    <div class="col-sm-6 col-xs-6 pull-right">
                                                        <div class="tg-playcontent">
                                                            <a class="tg-theme-tag" href="#">SWEEPER</a>
                                                            <h3><a href="#">Hustlin’ Owls</a></h3>
                                                            <span class="tg-stars"><span></span></span>
                                                            <div class="tg-description">
                                                                <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                            </div>
                                                            <ul class="tg-socialicons">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <figure>
                                                            <a href="#">
                                                                <img src="assets/images/player/img-03.png" alt="image description">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                            <div class="tg-contentbox">
                                                <div class="tg-section-heading"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                                </div>
                                                <div class="tg-btnbox">
                                                    <a class="tg-btn" href="#"><span>view all</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Top Rated Player End
                *************************************-->
                <!--************************************
                        Points Table Start
                *************************************-->
                <section class=" tg-haslayout tg-bgstyletwo">
                    <div class="tg-bgboxone"></div>
                    <div class="tg-bgboxtwo"></div>
                    <div class="tg-bgpattrant">
                        <div class="container">
                            <div class="row">
                                <div class="tg-pointstablewrapper">
                                    <div class="col-sm-8 col-xs-12">
                                        <div class="tg-pointstable">
                                            <div class="tg-section-heading"><h2>points table</h2></div>
                                            <div id="tg-pointstable-slider" class="tg-pointstable-slider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Pink Dragons</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Red Wolves</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Pink Dragons</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Big jaw lion</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Pink Dragons</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Red Wolves</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Pink Dragons</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Red Wolves</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Pink Dragons</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Big jaw lion</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Pink Dragons</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tg-pointtable">
                                                            <div class="tg-box">Red Wolves</div>
                                                            <div class="tg-box">w 1</div>
                                                            <div class="tg-box">d 0</div>
                                                            <div class="tg-box">l 1</div>
                                                            <div class="tg-box">pt 2</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                                <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                            </div>
                                            <div class="tg-btnbox">
                                                <a class="tg-btn" href="#"><span>view all</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 hidden-xs">
                                        <figure>
                                            <img src="assets/images/img-03.png" alt="image description">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Points Table End
                *************************************-->
                <!--************************************
                        Blog Start
                *************************************-->
                <section class="tg-main-section tg-haslayout">
                    <div class="container">
                        <div class="tg-section-name">
                            <h2>Latest blog / news</h2>
                        </div>
                        <div class="col-sm-11 col-xs-11 pull-right">
                            <div class="row">
                                <div class="tg-blogpost">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <article class="tg-post">
                                                <figure class="tg-postimg">
                                                    <a href="#">
                                                        <img src="assets/images/blog/img-01.jpg" alt="image description">
                                                    </a>
                                                    <figcaption>
                                                        <ul class="tg-postmetadata">
                                                            <li><a href="#">by admin</a></li>
                                                            <li><a href="#">04 comments</a></li>
                                                            <li><a href="#">lifestyle</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                                <div class="tg-posttitle"><h3><a href="#">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                                </div>
                                                <a class="tg-btn" href="#">Read more</a>
                                            </article>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <article class="tg-post">
                                                <figure class="tg-postimg">
                                                    <a href="#">
                                                        <img src="assets/images/blog/img-02.jpg" alt="image description">
                                                    </a>
                                                    <figcaption>
                                                        <ul class="tg-postmetadata">
                                                            <li><a href="#">by admin</a></li>
                                                            <li><a href="#">04 comments</a></li>
                                                            <li><a href="#">lifestyle</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                                <div class="tg-posttitle"><h3><a href="#">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                                </div>
                                                <a class="tg-btn" href="#"><span>read more</span></a>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Blog End
                *************************************-->
            </main>
            <!--************************************
                    Main End
            *************************************-->
            <!--************************************
                    Footer Start
            *************************************-->

            <!--************************************
                    Footer End
            *************************************-->
        </div>
        <!--************************************
                Wrapper End
        *************************************-->
        <!--************************************
                Search Start
        *************************************-->
        <div class="tg-searchbox">
            <a id="tg-close-search" class="tg-close-search" href="javascript:void(0)"><span class="fa fa-close"></span></a>
            <div class="tg-searcharea">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <form class="tg-form-search">
                                <fieldset>
                                    <input type="search" class="form-control" placeholder="keyword">
                                    <i class="icon-icon_search2"></i>
                                </fieldset>
                            </form>
                            <p>Start typing and press Enter to search</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Search End
        *************************************-->
        <!--************************************
            LightBoxes Start
        *************************************-->
        <div class="tg-modalbox modal fade" id="tg-login" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="tg-modal-content">
                    <div class="tg-formarea">
                        <div class="tg-border-heading">
                            <h3>Login</h3>
                        </div>
                        <form class="tg-loginform" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="userName/email" class="form-control" placeholder="username/email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" value="rememberme" class="checkbox">
                                        <em>Remember Me</em>
                                    </label>
                                    <a href="#">
                                        <em>Forgot Password</em>
                                        <i class="fa fa-question-circle"></i>
                                    </a>
                                </div>
                                <div class="form-group">
                                    <button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
                                </div>
                                <div class="tg-description">
                                    <p>Don't have an account? <a href="#">Signup</a></p>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tg-logintype">
                        <div class="tg-border-heading">
                            <h3>Login with</h3>
                        </div>
                        <ul>
                            <li class="tg-facebook"><a href="#">facebook</a></li>
                            <li class="tg-twitter"><a href="#">twitter</a></li>
                            <li class="tg-googleplus"><a href="#">google+</a></li>
                            <li class="tg-linkedin"><a href="#">linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-modalbox modal fade" id="tg-register" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="tg-modal-content">
                    <div class="tg-formarea">
                        <div class="tg-border-heading">
                            <h3>Signup</h3>
                        </div>
                        <form class="tg-loginform" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="userName" class="form-control" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <div class="tg-note">
                                        <i class="fa fa-exclamation-circle"></i>
                                        <span>We will email you your password.</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
                                </div>
                                <div class="tg-description">
                                    <p>Already have an account? <a href="#">Login</a></p>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tg-logintype">
                        <div class="tg-border-heading">
                            <h3>Signup with</h3>
                        </div>
                        <ul>
                            <li class="tg-facebook"><a href="#">facebook</a></li>
                            <li class="tg-twitter"><a href="#">twitter</a></li>
                            <li class="tg-googleplus"><a href="#">google+</a></li>
                            <li class="tg-linkedin"><a href="#">linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
            LightBoxes End
        *************************************-->
    </div>
@endsection