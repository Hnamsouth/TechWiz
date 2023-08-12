

@extends('guest.layout')
@section('main-content')
    {{--    @include('guest.html.slider-section')--}}
    <!-- start of /. match today section -->
    <div class="match-today-section world-cup-match">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="world-cup-match-title gallery">
                        <h1>{{$match->LeagueSeason->League->name}} <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]"><span><i class="fa fa-video-camera" aria-hidden="true"></i></span></a></h1>
                        <p><a href="#">{{$match->datetime}}, {{$match->LeagueSeason->League->country}}</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="match-left">
                        <div class="today-team-img teamsname">
                            <a href="#"><img src="{{$match->FirstTeam->logo}}" width="65" height="63" alt=""></a>
                        </div>
                        <div class="today-team-name teamsname">
                            <h1>Team {{$match->FirstTeam->id}}</h1>
                            <p>Teamfoot</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="team-vs-team">
                        <h1><span style="font-weight:600">{{$MatchResult[0]->goal}}({{$MatchResult[0]->penalty_shootout_goal}})</span> : <span>{{ $MatchResult[1]->goal}}({{$MatchResult[1]->penalty_shootout_goal}})</span></h1>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="match-right">
                        <div class="today-team-name teamsname text-right">
                            <h1>{{$match->SecondTeam->id}}</h1>
                            <p>Teamfoot</p>
                        </div>
                        <div class="today-team-img teamsname">
                            <a href="#"><img src="{{$match->SecondTeam->logo}}" width="65" height="63" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="nex-match">
                        <p>Half time:<span>0:0</span></p>
                        <p>Full time:<span>2:5</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of /. match today section -->

    <div class="world-cup-match-stastic-section">
        <div class="container">
            <div class="row">
                <div class="world-cup-match-stastic-inner">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#match-statistics" aria-controls="match-statistics" role="tab" data-toggle="tab">Match Statistics</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="world-match-left">
                            <div class="world-team-img">
                                <a href="#"><img src="{{$match->FirstTeam->logo}}" width="65" height="63" alt=""></a>
                            </div>
                            <div class="world-team-name">
                                <h1>Team {{$match->FirstTeam->id}}</h1>
                                <p>Teamfoot</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="world-match-right">
                            <div class="world-team-name text-right">
                                <h1>Team {{$match->SecondTeam->id}}</h1>
                                <p>Teamfoot</p>
                            </div>
                            <div class="world-team-img world-team-img-right">
                                <a href="#"><img src="{{$match->SecondTeam->logo}}" width="65" height="63" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="match-statistics">
                            <div class="result-tab-area">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->number_of_shots>$MatchStatistical[1]->number_of_shots?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->number_of_shots}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Shots</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->number_of_shots<$MatchStatistical[1]->number_of_shots?"statstics":"statstics-color"}}">{{$MatchStatistical[1]->number_of_shots}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->shot_on_Target>$MatchStatistical[1]->shot_on_Target?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->shot_on_Target}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Shots on Target</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->shot_on_Target<$MatchStatistical[1]->shot_on_Target?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->shot_on_Target}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->ball_control>$MatchStatistical[1]->ball_control?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->ball_control}}%</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Ball Control %</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->ball_control<$MatchStatistical[1]->ball_control?"statstics":"statstics-color"}}">{{$MatchStatistical[1]->ball_control}}%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->passes>$MatchStatistical[1]->passes?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->passes}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Pass</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->passes<$MatchStatistical[1]->passes?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->passes}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->accurate_passing_Rate>$MatchStatistical[1]->accurate_passing_Rate?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->accurate_passing_Rate}} %</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Pass Success %</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->accurate_passing_Rate<$MatchStatistical[1]->accurate_passing_Rate?"statstics":"statstics-color"}}">{{$MatchStatistical[1]->accurate_passing_Rate}} %</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->foul>$MatchStatistical[1]->foul?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->foul}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Foul</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->foul<$MatchStatistical[1]->foul?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->foul}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->yellow_card>$MatchStatistical[1]->yellow_card?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->yellow_card}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Yellow Card</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->yellow_card<$MatchStatistical[1]->yellow_card?"statstics":"statstics-color"}}">{{$MatchStatistical[1]->yellow_card}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->red_Card>$MatchStatistical[1]->red_Card?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->red_Card}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Red Card</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->red_Card<$MatchStatistical[1]->red_Card?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->red_Card}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->offside>$MatchStatistical[1]->offside?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->offside}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Offside</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->offside<$MatchStatistical[1]->offside?"statstics":"statstics-color"}}">{{$MatchStatistical[1]->offside}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="{{$MatchStatistical[0]->corner_kick>$MatchStatistical[1]->corner_kick?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->corner_kick}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Corner Kick</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="{{$MatchStatistical[0]->corner_kick<$MatchStatistical[1]->corner_kick?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->corner_kick}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row statstics-total-row statstics-total-row-last">
                                        <div class="col-md-12">
                                            <div class="statstics statstics-total">
                                                <p>TOTAL</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-padding-zero">
                                        <div class="col-md-12">
                                            <div class="player-states player-result-states">
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <div class="skillbar-items">
                                                        <div class="skillbar progress result-progressbar" data-percent="80%">
                                                            <div class="count-bar right progress-bar progress-bar-striped"></div>
                                                        </div>
                                                        <span class="progress-percent progress-percent-result {{$MatchStatistical[0]->number_of_shots>$MatchStatistical[1]->number_of_shots?"statstics":"statstics-color"}}">{{$MatchStatistical[0]->number_of_shots}}</span>
                                                    </div>
                                                </div>

                                                <div class="sports-number">
                                                    <p>Shots</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <span class="progress-percent-left progress-percent-result float-left {{$MatchStatistical[0]->number_of_shots<$MatchStatistical[1]->number_of_shots?"statstics":"statstics-color"}}">{{$MatchStatistical[1]->number_of_shots}}</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="skillbar progress result-progressbar" data-percent="65%">
                                                            <div class="count-bar progress-bar progress-bar-striped"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-padding-zero">
                                        <div class="col-md-12">
                                            <div class="player-states player-result-states">
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <div class="skillbar-items">
                                                        <div class="skillbar progress result-progressbar" data-percent="20%">
                                                            <div class="count-bar right progress-bar progress-bar-striped"></div>
                                                        </div>
                                                        <span class="progress-percent progress-percent-result">{{$MatchResult[0]->goal+$MatchResult[0]->penalty_shootout_goal}}</span>
                                                    </div>
                                                </div>

                                                <div class="sports-number">
                                                    <p>Goals</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <span class="progress-percent-left progress-percent-result float-left">{{$MatchResult[1]->goal+$MatchResult[1]->penalty_shootout_goal}}</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="skillbar progress result-progressbar" data-percent="10%">
                                                            <div class="count-bar progress-bar progress-bar-striped"></div>
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
                </div>
            </div>
        </div>
    </div>

@endsection
