<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable=[
        'name',
        'country',
        'continent',
        'logo',
        'level',
    ];
    use HasFactory;

    public function MatchLineups(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MatchLineups::class,'team_id','id');
    }
    public function TeamPlayer(){
        return $this->belongsToMany(Players::class,'team_player','team_id','player_id');
    }

    public function Matches(){
        return $this->hasMany(Match::class,'first_team_id','id');
    }
    public function MatchT2(){
        return $this->hasMany(Match::class,'second_team_id','id');
    }

}
