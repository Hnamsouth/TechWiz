@extends('guest.layout')
@section('main-content')
    <!-- start of /. match today section -->
    <div class="match-today-section">
        <div class="container">
            <div class="row">
                <div class="match-today-features">
                    <div class="col-md-4 col-md-12 col-xs-12">
                        <div class="match-left" style="display: flex">
                            <div class="today-team-img teamsname">
                                <a href="#"><img src="{{$leagueData[0]['match'][0]->FirstTeam->logo}}" width="65" height="63" alt=""></a>
                            </div>
                            <div class="today-team-name teamsname">
                                <h1>{{$leagueData[0]['match'][0]->FirstTeam->name}}</h1>
                                <p>Teamfoot</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-12 col-xs-12">
                        <div class="team-vs-team">
                            <h1>VS</h1>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-12 col-xs-12">
                        <div class="match-right" style="display: flex; flex-direction:row">
                            <div class="today-team-name teamsname">
                                <h1>{{$leagueData[0]['match'][0]->SecondTeam->name}}</h1>
                                <p class="text-right">Teamfoot</p>
                            </div>
                            <div class="today-team-img teamsname">
                                <a href="#"><img src="{{$leagueData[0]['match'][0]->SecondTeam->logo}}" width="65" height="63" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="nex-match">
                        <h2>Next Match: <span>({{$leagueData[0]['match'][0]->datetime}})</span></h2>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>Location: Stade de France, Saint-Denis</p>
                        <p><i class="fa fa-male" aria-hidden="true"></i>Referee: Mark Clattenburg (ENG)</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of /. match today section -->
    <!-- start of /. super cup league section -->
    <div class="super-cup-league-section">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach($leagueData as $index=>$ll)
                                    @if($index<2) @continue @endif
                                    <li role="presentation" class="{{$index==3?"active":""}}"><a href="#{{str_replace(' ','',$ll['league']->name)}}" aria-controls="match-statistics" role="tab" data-toggle="tab">{{$ll['league']->name}}</a></li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($leagueData as $index=>$ll)
                                    @if($index<2) @continue @endif
                                    <div role="tabpanel" class="tab-pane {{$index==3?"active":""}}" id="{{str_replace(' ','',$ll['league']->name)}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="fixture-title">
                                                    <h1>{{$ll['league']->name}}</h1>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach($ll['match']->sortBy([['datetime','asc']])->take(10) as $id=>$m)
                                            <div class="row" style="margin-bottom: 33px">
                                                <div class="white-match">
                                                    <div class="col-md-4 col-xs-12">
                                                        <div class="match-left"  style="display: flex">
                                                            <div class="fixture-team-img">
                                                                <a href="#"><img class="img-responsive" src="{{$m->FirstTeam->logo}}" width="80" height="77" alt="" style="border-radius: 50%"></a>
                                                            </div>
                                                            <div class="fixture-team-name fixture-team-left">
                                                                <h1>{{$m->FirstTeam->name}}</h1>
                                                                <p>{{$m->FirstTeam->country}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12">
                                                        <div class="fixture-team-date">
                                                            <h1>{{$m->datetime}}</h1>
                                                            <p>{{$m->FirstTeam->country}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12">
                                                        <div class="match-right" style="display: flex; flex-direction:row">
                                                            <div class="fixture-team-name fixture-team-right text-right">
                                                                <h1>{{$m->SecondTeam->name}}</h1>
                                                                <p>{{$m->SecondTeam->country}}</p>
                                                            </div>
                                                            <div class="fixture-team-img">
                                                                <a href="#"><img class="img-responsive" src="{{$m->SecondTeam->logo}}" width="64" height="84" alt="" style="border-radius: 50%"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
