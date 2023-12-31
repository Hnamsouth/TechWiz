<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchPlayer extends Model
{
    use HasFactory;

    public $PlayerMatch;
    protected $table='match_players';
    protected  $fillable=[
        'position',
        'rating',
        'minute_playing',
        'goal',
        'goal_assists',
        'red_card',
        'yellow_card',
        'main_lineup',
        'match_id',
        'player_id',
        'team_id',
    ];

    public function scopeMainLineups($query,$mainlineup=0){
        return $query->where('main_lineup','=',$mainlineup);
    }
    public function scopeMatch($query,$match_id){
        if($match_id && $match_id >=0 ){
            return $query->where('match_id','=',$match_id);
        }
        return $query;
    }
    public function scopeTeams($query,$team_id){
        if($team_id && $team_id!=0){
            return $query->where('team_id','=',$team_id);
        }
        return $query;
    }
    public function Player(){
        return $this->belongsTo(Players::class);
    }

    public function scopeMatchPlayed($query,$season,$player_id){
        return $query->whereIn('match_id',function ($query) use ($season){
            $query->from('matches')->select('id')->where('league_season_id','=',$season);
        })->where('player_id','=',$player_id);
    }

    public function get_playerM(){
        return $this->PlayerMatch;
    }
    public function set_playerM($PlayerMatch){
        $this->PlayerMatch=$PlayerMatch;
    }
}
