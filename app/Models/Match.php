<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $table = 'matches';
    protected $fillable = [
        'datetime',
        'location',
        'status',
        'first_team_id',
        'second_team_id',
        'league_season_id',
        'euro_world_season_id',
        'league_stage_id',
    ];
    public function FirstTeam(){
        return $this->belongsTo(Team::class,'first_team_id');
    }
    public function SecondTeam(){
        return $this->belongsTo(Team::class,'second_team_id');
    }
    public function MatchResult(){
        return $this->hasMany(MatchResult::class,'match_id');
    }
    public function MatchStatistical(){
        return $this->hasMany(MatchStatistical::class,'match_id');
    }
    public function MatchEvent(){
        return $this->hasMany(MatchEvent::class,'match_id');
    }
    public function MatchPlayer(){
        return $this->hasMany(MatchPlayer::class,'match_id');
    }
    public function MatchLineups(){
        return $this->hasMany(MatchLineups::class,'match_id');
    }
    public function LeagueSeason(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(LeagueSeason::class);
    }

    public function EuroWorldSeason(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(EuroWorldSeason::class, 'euro_world_season');
    }
    public function LeagueStage(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(LeageStage::class,'league_stage_id','id');
    }

    public function scopeStatus($query, $search){
            return $query->where('status','=',$search);
    }
    public function scopeLeagueSeasonSearch($query, $league_season_id){
        if($league_season_id && $league_season_id != 0){
            return $query->where('league_season_id','=',$league_season_id);
        }
        return $query;
    }
    public function scopeEuroWCSeason($query, $euro_wc_season_id){
        if($euro_wc_season_id && $euro_wc_season_id != 0){
            return $query->where('euro_world_season_id','=',$euro_wc_season_id);
        }
        return $query;
    }
    public function scopeLeagueStage($query, $league_stage_id){
        if($league_stage_id && $league_stage_id != 0){
            return $query->where('league_stage_id','=',$league_stage_id);
        }
        return $query;
    }
    public function scopeF1Team($query, $team_id){
        if($team_id && $team_id != 0){
            return $query->where('first_team_id','=',$team_id);
        }
        return $query;
    }

    public function scopeF1TeamSeason($query, $team_id,$season){
        if($team_id && $team_id != 0){
            return $query->where(function ($query) use ($team_id) {
                $query->where('first_team_id', $team_id)
                    ->orWhere('second_team_id', $team_id);
            })
                ->where('league_season_id', $season);
        }
        return $query;
    }




}
