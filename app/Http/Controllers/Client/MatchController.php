<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Match;
use App\Models\MatchEvent;
use App\Models\Players;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    //

    public function match_result(Match $match){
//        dd($match->MatchStatistical);
        $MatchResult = $match->MatchResult;
        $MatchStatistical = $match->MatchStatistical;
        $ME1 = MatchEvent::MatchSearch($match->id)->TimeAt("First Half")->get();
        $ME2 = MatchEvent::MatchSearch($match->id)->TimeAt("Second Half")->get();
        $ME3 = MatchEvent::MatchSearch($match->id)->TimeAt("First Extra Time")->get();
        $ME4 = MatchEvent::MatchSearch($match->id)->TimeAt("Penalty Shootout")->get();

//        dd(MatchEvent::MatchSearch($match->id)->get());
        $MatchLineups = $match->MatchLineups;
        $MatchPlayer = $match->MatchPlayer;
        return view('guest.match-detail',compact('match','MatchResult','MatchStatistical','ME1','ME2','ME3','ME4','MatchLineups','MatchPlayer'));
    }
}
