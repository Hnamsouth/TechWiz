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
        'first_team',
        'second_team',
        'league_season_id',
        'euro_world_season_id',
        'league_stage_id',
    ];

    public function LeagueSeason(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(LeagueSeason::class, 'league_season');
    }

    public function EuroWorldSeason(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(EuroWorldSeason::class, 'euro_world_season');
    }
    public function LeagueStage(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(LeageStage::class,'league_stage_id','id');
    }

}
