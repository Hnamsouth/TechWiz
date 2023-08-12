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
        return $this->hasMany(Matchs::class,'first_team_id','id');
    }
    public function MatchT2(){
        return $this->hasMany(Matchs::class,'second_team_id','id');
    }

    public function scopeSearch($query, $search) {
        if($search && $search != "") {
            return $query->where("name", "like", "%$search%");
        }
        return $query;
    }

}
