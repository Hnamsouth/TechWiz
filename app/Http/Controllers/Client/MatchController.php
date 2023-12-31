<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\League;
use App\Models\LeagueSeason;
use App\Models\Matchs;
use App\Models\MatchEvent;
use App\Models\MatchPlayer;
use App\Models\MatchResult;
use App\Models\Players;
use App\Models\PointTeam;
use App\Models\TeamLeagueSeason;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    //

    public function match(){
        $leagueList= League::with('LeagueSeason')->get();
        $leagueData=collect([]);
        foreach ($leagueList as $index=>$item){
            // tim match result cua team vaf tran dau da dien da trong mua giai
            if($index<2) {continue;}
            // team cua moi giai dau
            $leagueSeason =$item->LeagueSeason->sortBy([['season','desc']])->first();
            $matchs= Matchs::LeagueSeasonSearch($leagueSeason->id)->Status(0)->get();
            $leagueData->push([
                'league'=>$item,
                'match'=>$matchs
            ]);
        }
//        dd($leagueData[0]['match']);
        return view('guest.match',compact('leagueData'));
    }
    public function match_result(Matchs $match){
//        dd($match->MatchStatistical);
        $MatchResult = $match->MatchResult;
        $MatchStatistical = $match->MatchStatistical;
        $ME1 = MatchEvent::MatchSearch($match->id)->TimeAt("First Half")->get();
        $ME2 = MatchEvent::MatchSearch($match->id)->TimeAt("Second Half")->get();
        $ME3 = MatchEvent::MatchSearch($match->id)->TimeAt("First Extra Time")->get();
        $ME4 = MatchEvent::MatchSearch($match->id)->TimeAt("Penalty Shootout")->get();

        $MatchLineups = $match->MatchLineups;
        $MatchPlayer = $match->MatchPlayer;
        $MatchPlayerT2 = $match->MatchPlayer->where('team_id','=',$MatchLineups[1]->team_id);
//        dd($MatchPlayer);

        return view('guest.match-detail',compact('match','MatchResult','MatchStatistical','ME1','ME2','ME3','ME4','MatchLineups','MatchPlayer','MatchPlayerT2'));
    }

    public function PointTable(){
        // win- lose- draw - goal for - goal against - point
        $leagueList= League::with('LeagueSeason')->get();
        $leagueData=collect([]);
        foreach ($leagueList as $index=>$item){
            // tim match result cua team vaf tran dau da dien da trong mua giai
            if($index<2) {continue;}
            // team cua moi giai dau
            $teamleague = TeamLeagueSeason::with('Teams')->LeagueSeason($item->LeagueSeason[0]->id)->get();
            // for real
//            $point=collect([]);
//            dd($teamleague);
//            foreach ($teamleague as $id=>$t){
//                // tim tran da dau cua team trong mua giai
//                $matches= Match::F1TeamSeason($t->team_id,$t->league_season_id)->Status(1)->get();
//                $tp = new PointTeam();
//                foreach ($matches as $m){
//                    $check= $m->MatchResult[0];
//                   $t1= $m->MatchResult[$check->team_id==$t->team_id?0:1];
//                   $t2= $m->MatchResult[$check->team_id==$t->team_id?1:0];
//                   if($t1->goal >$t2->goal){
//                       $tp->set_win(is_null($tp->get_win())?1:$tp->get_win()+1);
//                       $tp->set_point(is_null($tp->get_point())?3:$tp->get_point()+3);
//                   }elseif ($t1->goal ==$t2->goal){
//                       if($t1->penalty_shootout_goal >0){
//                           if($t1->penalty_shootout_goal > $t2->penalty_shootout_goal){
//                               $tp->set_win(is_null($tp->get_win())?1:$tp->get_win()+1);
//                               $tp->set_point(is_null($tp->get_point())?3:$tp->get_point()+3);
//                           }else{
//                               $tp->set_lose(is_null($tp->get_lose())?1:$tp->get_lose()+1);
//                           }
//                       }else{
//                           $tp->set_draw(is_null($tp->get_draw())?1:$tp->get_draw()+1);
//                           $tp->set_point(is_null($tp->get_point())?1:$tp->get_point()+1);
//                       }
//                   }else{
//                       $tp->set_lose(is_null($tp->get_lose())?1:$tp->get_lose()+1);
//                   }
//                    $tp->set_goal_for(is_null($tp->get_gf())?1:$tp->get_gf()+$t1->goal);
//                    $tp->set_goal_against(is_null($tp->get_ga())?1:$tp->get_ga()+$t2->goal);
//                }
//                $tp->set_team($matches[$id]->FirstTeam);
//                $tp->set_league_season($matches[0]->LeagueSeason);
//                $point->push($tp);
//            }
            $leagueData->push([
                'league'=>$item,
                'point'=>$teamleague
            ]);
        }

        return view('guest.point-table',compact('leagueData'));
    }

    public function TopPlayers(){
        $leagueList= League::with('LeagueSeason')->get();
        $leagueData=collect();
        foreach ($leagueList as $index=>$item){
            // tim match result cua team vaf tran dau da dien da trong mua giai
            if($index<2) {continue;}
            // team cua moi giai dau
            $leagueSeason =$item->LeagueSeason->sortBy([['season','desc']])->first();
            // cac cau thu trong giai dau
            $players= Players::SeasonPlayers($leagueSeason->id)->get();
            // for real
//            $leaguePL= collect();
//            foreach ($players as $pl){
//                $player= new MatchPlayer();
//                // nhung tran da dau cua player
//                $matchplayer = MatchPlayer::MatchPlayed($leagueSeason->id,$pl->id)->with('Player')->get();
//                foreach ($matchplayer as $mp){
//                    $player->id+=$mp->id;
//                    $player->player_id+=$mp->player_id;
//                    $player->goal+=$mp->goal;
//                    $player->rating+=$mp->rating;
//                    $player->minute_playing+=$mp->minute_playing;
//                    $player->goal_assists+=$mp->goal_assists;
//                    $player->yellow_card+=$mp->yellow_card;
//                    $player->red_card+=$mp->red_card;
//                    $player->set_playerM($mp->Player);
//                }
//                $leaguePL->push($player);
//            }
            $leagueData->push([
                'league'=>$item,
                'players'=>$players
            ]);
        }
//        dd($leagueData[0]['players']);
    // tim nhung cau thu co
        return view('guest.top-players',compact('leagueData'));
    }
}
