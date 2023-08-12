

@extends('guest.layout')
@section('main-content')
{{--    @include('guest.html.slider-section')--}}
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Point Table</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Player</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="world-cup-match-stastic-section">
        <div class="container">
            <div class="row">
                <div class="world-cup-match-stastic-inner">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($leagueData as $index=>$ll)
                                @if($index<2) @continue @endif
                                <li role="presentation" class="{{$index==3?"active":""}}"><a href="#{{str_replace(' ','',$ll['league']->name)}}" aria-controls="match-statistics" role="tab" data-toggle="tab">{{$ll['league']->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        @foreach($leagueData as $index=>$ll)
                            @if($index<2) @continue @endif
                            <div role="tabpanel" class="tab-pane {{$index==3?"active":""}}" id="{{str_replace(' ','',$ll['league']->name)}}">
                                <div class="point-table-area">
                                    <h2 class="text-center">{{$ll['league']->name}}</h2>
                                    <div class="point-itmes">

                                        <table class="table table-striped-inverse point-table">
                                            <thead>
                                            <tr>
                                                <th width="5%" scope="row">Rank</th>
                                                <th width="25%" class="text-center">Player</th>
                                                <th width="10%" class="text-center">Goal</th>
                                                <th width="10%" class="text-center">Assists</th>
                                                <th width="10%" class="text-center">Rate</th>
                                                <th width="10%" class="text-center">MN Playing</th>
                                                <th width="10%" class="text-center">Red Card</th>
                                                <th width="10%" class="text-center">Yellow Card</th>
                                                <th width="10%" class="text-center">Match Played</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($ll['players']->sortBy([['goal', 'desc']])->take(10) as $id=>$tp)
                                                <tr>
                                                    <td data-th="Rank" width="5%" scope="row">{{$id+1}}</td>
                                                    <td data-th="Player" width="25%"  >
                                                        <a href="{{route('playerdetail',['player'=>$tp->id])}}" data-toggle="tooltip" data-placement="top" class="text-left">
                                                            <img src="{{$tp->img}}" alt="" width="30" height="30" style="border-radius:50%" />
                                                            <span>{{$tp->name}}</span>
                                                        </a>
                                                    </td>
                                                    <td data-th="Goal" width="10%" class="text-center">{{150-$id}}</td>
                                                    <td data-th="Assists" width="10%" class="text-center">{{random_int(1,30)}}</td>
                                                    <td data-th="Rate" width="10%" class="text-center">{{random_int(6,9)+0.5}}</td>
                                                    <td data-th="MNPlaying" width="10%" class="text-center">{{random_int(556,720)}}</td>
                                                    <td data-th="RedCard" width="10%" class="text-center">{{random_int(1,5)}}</td>
                                                    <td data-th="YellowCard" width="10%" class="text-center">{{random_int(1,6)}}</td>
                                                    <td data-th="MatchPlayed" width="10%" class="text-center">{{120-(random_int(5,8))}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>

                                        <div class="point-table-button text-center">
                                            <a href="">View Details <i class="fa fa-plus-circle"></i></a>
                                        </div>
                                        <table class="table point-items-more table-striped-inverse">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <p class="pt-heading">10 Aug, 2016 - Group Stage</p>
                                                    <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                                </td>
                                                <td class="text-right">
                                                    <span>France</span>
                                                    <img src="images/flag2.png" alt="" />
                                                    <span>2:1</span>
                                                    <img src="images/flag1.png" alt="" />
                                                    <span>Portugal</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="pt-heading">06 Jun, 2016 - Group Stage</p>
                                                    <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                                </td>
                                                <td class="text-right">
                                                    <span>Iceland</span>
                                                    <img src="images/flag3.png" alt="" />
                                                    <span>1:0</span>
                                                    <img src="images/flag1.png" alt="" />
                                                    <span>Portugal</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="pt-heading">04 Jun, 2016 - Group Stage</p>
                                                    <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                                </td>
                                                <td class="text-right">
                                                    <span>Ireland</span>
                                                    <img src="images/flag4.png" alt="" />
                                                    <span>2:1</span>
                                                    <img src="images/flag1.png" alt="" />
                                                    <span>Portugal</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
