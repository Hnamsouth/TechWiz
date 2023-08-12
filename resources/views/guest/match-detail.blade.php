

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
                            <li role="presentation"><a href="#match-event" aria-controls="match-reports" role="tab" data-toggle="tab">Match Events</a></li>
                            <li role="presentation"><a href="#team" aria-controls="team" role="tab" data-toggle="tab">Team</a></li>
                            <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments</a></li>
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
                        <div role="tabpanel" class="tab-pane" id="match-event">
                            <div class="result-tab-area">
                                <div class="col-md-12">
                                    @if(!is_null($ME1))
                                        <div class="row statstics-attempts-row">
                                            <div class="col-md-12">
                                                <div class="statstics statstics-attempts">
                                                    <p>{{$ME1[0]->time_at}}</p>
                                                </div>
                                                <p></p>
                                            </div>
                                        </div>
                                        @foreach($ME1 as $index=>$fh)
                                            <div class="row {{$index%2==1?"color-row":""}} " style="display:flex; align-items:center">
                                                @if($fh->event_type != 'Substitution')
                                                    <div class="col-md-4 col-xs-2">
                                                        <img src="{{$fh->FirstPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/>
                                                    </div>
                                                    <div class="col-md-8 col-xs-10">
                                                        <div class="statstics statstics-center">
                                                            <div class="row " style="display:flex;align-self: center">
                                                                <div class="col-col-md-8 col-xs-10">
                                                                    <p> <span style="font-size:23px"> {{$fh->FirstPlayer->name}}</span> {{$fh->FirstPlayer->position}} ({{$fh->FirstPlayer->number}}) <img src="{{$fh->FirstPlayer->Teams[0]->logo}}" width="30" height="30" style="border-radius: 50%;"/></p>
                                                                    <p class="text-gray">{{$fh->event_type== 'Penalty'?"Penalty Goal":""}} </p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-2">
                                                                    <div class="statstics">
                                                                        @if($fh->event_type == 'Yellow card' || $fh->event_type == 'Red card' )
                                                                            <p class="statstics "><img src="https://ssl.gstatic.com/onebox/sports/game_feed/{{$fh->event_type == 'Red card'?"red":"yellow"}}_card_icon.svg" width="24" height="24" />  {{$fh->minute>45? 45 . " +" . ($fh->minute-45): $fh->minute}}'</p>
                                                                        @else
                                                                            <p class="statstics "><img src="https://ssl.gstatic.com/onebox/sports/game_feed/goal_icon.svg" width="24" height="24" />  {{$fh->minute>45? 45 . " +" . ($fh->minute-45): $fh->minute}}'</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                        <div class="col-md-4 col-xs-2">
                                                            <div class="statstics">
                                                                <p><img src="{{$fh->FirstPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/>  {{$fh->FirstPlayer->name}}({{$fh->FirstPlayer->number}}) </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-8">
                                                            <div class="statstics statstics-center text-center">
                                                                <p class="statstics"><img src="{{$fh->FirstPlayer->Teams[0]->logo}}" width="30" height="30" style="border-radius: 50%;"/> <img src="https://ssl.gstatic.com/onebox/sports/game_feed/substitution_icon.svg" width="24" height="24" /> <span>{{$fh->minute>45? 45 . " +" . ($fh->minute-45): $fh->minute}}'</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-2">
                                                            <div class="statstics statstics-right text-right">
                                                                <p class="statstics-color">{{$fh->SecondPlayer->name}}({{$fh->SecondPlayer->number}})  <img src="{{$fh->SecondPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/></p>
                                                            </div>
                                                        </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    @endif
                                    @if(!is_null($ME2))
                                            <div class="row statstics-attempts-row">
                                                <div class="col-md-12">
                                                    <div class="statstics statstics-attempts">
                                                        <p>{{$ME2[0]->time_at}}</p>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            @foreach($ME2 as $index=>$fh)
                                                <div class="row {{$index%2==1?"color-row":""}} " style="display:flex; align-items:center">
                                                    @if($fh->event_type != 'Substitution')
                                                        <div class="col-md-4 col-xs-2">
                                                            <img src="{{$fh->FirstPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/>
                                                        </div>
                                                        <div class="col-md-8 col-xs-10">
                                                            <div class="statstics statstics-center">
                                                                <div class="row " style="display:flex;align-self: center">
                                                                    <div class="col-col-md-8 col-xs-10">
                                                                        <p> <span style="font-size:23px"> {{$fh->FirstPlayer->name}}</span> {{$fh->FirstPlayer->position}} ({{$fh->FirstPlayer->number}}) <img src="{{$fh->FirstPlayer->Teams[0]->logo}}" width="30" height="30" style="border-radius: 50%;"/></p>
                                                                        <p class="text-gray">{{$fh->event_type== 'Penalty'?"Penalty Goal":""}} </p>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-2">
                                                                        <div class="statstics">
                                                                            @if($fh->event_type == 'Yellow card' || $fh->event_type == 'Red card' )
                                                                                <p class="statstics "><img src="https://ssl.gstatic.com/onebox/sports/game_feed/{{$fh->event_type == 'Red card'?"red":"yellow"}}_card_icon.svg" width="24" height="24" />  {{$fh->minute>90? 90 . " +" . ($fh->minute-90): $fh->minute}}'</p>
                                                                            @else
                                                                                <p class="statstics "><img src="https://ssl.gstatic.com/onebox/sports/game_feed/goal_icon.svg" width="24" height="24" />  {{$fh->minute>90? 90 . " +" . ($fh->minute-90): $fh->minute}}'</p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="col-md-4 col-xs-2">
                                                            <div class="statstics">
                                                                <p><img src="{{$fh->FirstPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/>  {{$fh->FirstPlayer->name}}({{$fh->FirstPlayer->number}}) </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-8">
                                                            <div class="statstics statstics-center text-center">
                                                                <p class="statstics"><img src="{{$fh->FirstPlayer->Teams[0]->logo}}" width="30" height="30" style="border-radius: 50%;"/> <img src="https://ssl.gstatic.com/onebox/sports/game_feed/substitution_icon.svg" width="24" height="24" /> <span>{{$fh->minute>90? 90 . " +" . ($fh->minute-90): $fh->minute}}'</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-2">
                                                            <div class="statstics statstics-right text-right">
                                                                <p class="statstics-color">{{$fh->SecondPlayer->name}}({{$fh->SecondPlayer->number}})  <img src="{{$fh->SecondPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/></p>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        @endif
                                    @if(!is_null($ME3))
                                            <div class="row statstics-attempts-row">
                                                <div class="col-md-12">
                                                    <div class="statstics statstics-attempts">
                                                        <p>{{$ME3[0]->time_at}}</p>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            @foreach($ME3 as $index=>$fh)
                                                <div class="row {{$index%2==1?"color-row":""}} " style="display:flex; align-items:center">
                                                    @if($fh->event_type != 'Substitution')
                                                        <div class="col-md-4 col-xs-2">
                                                            <img src="{{$fh->FirstPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/>
                                                        </div>
                                                        <div class="col-md-8 col-xs-10">
                                                            <div class="statstics statstics-center">
                                                                <div class="row " style="display:flex;align-self: center">
                                                                    <div class="col-col-md-8 col-xs-10">
                                                                        <p> <span style="font-size:23px"> {{$fh->FirstPlayer->name}}</span> {{$fh->FirstPlayer->position}} ({{$fh->FirstPlayer->number}}) <img src="{{$fh->FirstPlayer->Teams[0]->logo}}" width="30" height="30" style="border-radius: 50%;"/></p>
                                                                        <p class="text-gray">{{$fh->event_type== 'Penalty'?"Penalty Goal":""}} </p>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-2">
                                                                        <div class="statstics">
                                                                            @if($fh->event_type == 'Yellow card' || $fh->event_type == 'Red card' )
                                                                                <p class="statstics "><img src="https://ssl.gstatic.com/onebox/sports/game_feed/{{$fh->event_type == 'Red card'?"red":"yellow"}}_card_icon.svg" width="24" height="24" />  {{$fh->minute>120? 120 . " +" . ($fh->minute-120): $fh->minute}}'</p>
                                                                            @else
                                                                                <p class="statstics "><img src="https://ssl.gstatic.com/onebox/sports/game_feed/goal_icon.svg" width="24" height="24" />  {{$fh->minute>120? 120 . " +" . ($fh->minute-120): $fh->minute}}'</p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="col-md-4 col-xs-2">
                                                            <div class="statstics">
                                                                <p><img src="{{$fh->FirstPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/>  {{$fh->FirstPlayer->name}}({{$fh->FirstPlayer->number}}) </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-8">
                                                            <div class="statstics statstics-center text-center">
                                                                <p class="statstics"><img src="{{$fh->FirstPlayer->Teams[0]->logo}}" width="30" height="30" style="border-radius: 50%;"/> <img src="https://ssl.gstatic.com/onebox/sports/game_feed/substitution_icon.svg" width="24" height="24" /> <span>{{$fh->minute>45? 45 . " +" . ($fh->minute-45): $fh->minute}}'</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-2">
                                                            <div class="statstics statstics-right text-right">
                                                                <p class="statstics-color">{{$fh->SecondPlayer->name}}({{$fh->SecondPlayer->number}})  <img src="{{$fh->SecondPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/></p>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        @endif
{{--                                        	https://ssl.gstatic.com/onebox/sports/game_feed/pens_goal_icon.svg     // miss--}}
                                    @if(!is_null($ME4))
                                            <div class="row statstics-attempts-row">
                                                <div class="col-md-12">
                                                    <div class="statstics statstics-attempts">
                                                        <p>{{$ME4[0]->time_at}}</p>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                        @php
                                            $ft=0;
                                            $st=0;
                                        @endphp
                                            @for($i=0;$i<$ME4->count()-1;$i++)
                                                @if($i%2==1) @continue @endif
                                                    <div class="row {{$i%2==1?"color-row":""}} " style="display:flex; align-items:center">
                                                        <div class="col-md-4 col-xs-2">
                                                            @php($ft=$ME4[$i]->event_type=='Penalty'?$ft+1:$ft)
                                                            <div style="display:flex">
                                                                <img src="{{$ME4[$i]->FirstPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/>
                                                                <div class="row">
                                                                    <span style="font-size:15px;font-weight:bold">{{$ME4[$i]->FirstPlayer->name}}({{$ME4[$i]->FirstPlayer->number}})</span>
                                                                    <p>({{$ft}} - {{$st}})</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-8">
                                                            <div class="statstics statstics-center text-center">
                                                                <p class="statstics">
                                                                    <img src="https://ssl.gstatic.com/onebox/sports/game_feed/pens_{{$ME4[$i]->event_type=='Penalty'?"goal":"miss"}}_icon.svg" width="30" height="30" style="border-radius: 50%;"/> -
                                                                    <img src="https://ssl.gstatic.com/onebox/sports/game_feed/pens_{{$ME4[$i+1]->event_type=='Penalty'?"goal":"miss"}}_icon.svg" width="30" height="30" style="border-radius: 50%;"/>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-2">
                                                            @php($st=$ME4[$i+1]->event_type=='Penalty'?$st+1:$st)
                                                            <div class="text-right" style="display: flex;flex-direction:row;justify-content: flex-end">
                                                                <div class="row">
                                                                    <span style="font-size:15px;font-weight:bold">{{$ME4[$i+1]->FirstPlayer->name}}({{$ME4[$i+1]->FirstPlayer->number}})</span>
                                                                    <p>({{$ft}} - {{$st}})</p>
                                                                </div>
                                                                <img src="{{$ME4[$i+1]->FirstPlayer->img}}" width="60" height="60" style="border-radius: 50%;"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endfor
                                            <p class="text-center">{{ $ME4[0]->FirstPlayer->Teams[0]->name }} kicks the first turn {{ $ft }}</p>
                                        @endif

                                    <div class="row statstics-total-row statstics-total-row-last">
                                        <div class="col-md-12">
                                            <div class="statstics statstics-total">
                                                <p>TOTAL</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="comments">
                            <div class="result-tab-area">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p>16</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Shots</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">7</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p>6</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Shots on Target</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">3</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p>86%</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Pass Success %</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">72%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="statstics-color">49%</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Aerial Dual Success</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p>51%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p>16</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Dribbles Won</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">3</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="statstics-color">18</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Tackles</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p>25</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row statstics-attempts-row">
                                        <div class="col-md-12">
                                            <div class="statstics statstics-attempts">
                                                <p>Attempts</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p>16</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Total</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">7</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p>9</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Open Play</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">3</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p>6</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Set Piece</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">4</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="statstics-color">0</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Counter Attack</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">0</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p>1</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Penalty</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">0</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                <p class="statstics-color">0</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Own Goal</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                <p class="statstics-color">0</p>
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
                                                <div class="main-progressbar main-progressbar-result">
                                                    <span class="progress-percent progress-percent-result">16</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="progress-bar progress-bar-striped progress-bar-striped1 active" style="float: right; width: 80%;" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sports-number">
                                                    <p>Shots</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result">
                                                    <span class="progress-percent-left progress-percent-result float-left statstics-color">7</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-padding-zero">
                                        <div class="col-md-12">
                                            <div class="player-states player-result-states">
                                                <div class="main-progressbar main-progressbar-result">
                                                    <span class="progress-percent progress-percent-result">2</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="progress-bar progress-bar-striped progress-bar-striped1 active" style="float: right;" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                            <span class="sr-only">60% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sports-number">
                                                    <p>Goals</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result">
                                                    <span class="progress-percent-left progress-percent-result float-left statstics-color">1</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                            <span class="sr-only">80% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-padding-zero">
                                        <div class="col-md-12">
                                            <div class="player-states player-result-states">
                                                <div class="main-progressbar main-progressbar-result">
                                                    <span class="progress-percent progress-percent-result statstics-color">12%</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="progress-bar progress-bar-striped progress-bar-striped1 active" style="float: right; width: 90%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                            <span class="sr-only">90% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sports-number">
                                                    <p>Conversion Rate</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result">
                                                    <span class="progress-percent-left progress-percent-result float-left">14%</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="team">
                            <div class="result-tab-area">
                                <div class="col-md-12">
                                    @for($i=0;$i < $MatchPlayer->count()/2;$i++)
                                        <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="statstics">
                                                        <a  href="{{route('playerdetail',['player'=>$MatchPlayer[$i]->Player->id])}}" class="flex-al-center" style="font-size:15px;font-weight:bold">
                                                            <img src="{{$MatchPlayer[$i]->Player->img}}" width="60" height="60" style="border-radius: 50%;"/>
                                                            <span>{{$MatchPlayer[$i]->Player->name}}({{$MatchPlayer[$i]->Player->number}})</span>
                                                        </a>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                    <div class="statstics statstics-right text-right">
                                                        <a href="{{route('playerdetail',['player'=>$MatchPlayer[$i]->Player->id])}}" class="flex-al-center"  style="justify-content:end; font-size:15px;font-weight:bold">
                                                            <span>{{$MatchPlayer[$i+2]->Player->name}}({{$MatchPlayer[$i+2]->Player->number}})</span>
                                                            <img src="{{$MatchPlayer[$i+2]->Player->img}}" width="60" height="60" style="border-radius: 50%;"/>
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>`
                                        @php($i=$i%2==1?$i+2:$i)
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
