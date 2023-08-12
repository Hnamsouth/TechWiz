<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchResult extends Model
{
    use HasFactory;

    protected $table='match_result';

    protected $fillable =[
        'match_id',
        'team_id',
        'goal',
        'penalty_shootout_goal',
    ];

    public function Match(){
        return $this->belongsTo(Matchx::class,'match_id');
    }
    public function scopeMatchSearch($query,$match_id){
        if($match_id && $match_id!=0){
            return $query->where('match_id','=',$match_id);
        }
        return $query;
    }

    public function scopeTeamSearch($query,$team_id){
        if($team_id && $team_id!=0){
            return $query->where('team_id','=',$team_id);
        }
        return $query;
    }

    public function scopeForTeamInSeason($query,$teamId, $seasonId)
    {
        return $query->where('team_id', $teamId)
            ->whereIn('match_id', function ($query) use ($seasonId) {
                $query->select('id')
                    ->from('matches')
                    ->where('league_season_id', $seasonId);
            });
    }
}
