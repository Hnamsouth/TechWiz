<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    protected $table='players';

    protected $fillable=[
        'name',
        'nationality',
        'position',
        'date_of_birth',
        'img',
        'description',
        'number',
        'height',
        'weight',
    ];

    public function MatchEvents(){
        return $this->hasMany(MatchEvent::class);
    }

    public function Teams(){
        return $this->belongsToMany(Team::class,'team_player','player_id','team_id');
    }

    public function MatchPlayer(){
        return $this->hasMany(MatchPlayer::class,"player_id");
    }

    public function scopeSeasonPlayers($query,$season_id){
        if($season_id && $season_id!=0){
            return $query->whereIn('id',function ($query) use ($season_id){
                $query->select('player_id')->from('team_player')->whereIn('team_id',function ($query) use ($season_id){
                    $query->select('team_id')->from('team_league_season')->where('league_season_id','=',$season_id);
                });
            });
        }
        return $query;
    }
}
