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
    public function TeamPlayers(){
        return $this->belongsToMany(Players::class,'team_player');
    }

    public function MatchT1(){
        return $this->hasMany(Match::class,'first_team_id','id');
    }
    public function MatchT2(){
        return $this->hasMany(Match::class,'second_team_id','id');
    }

    public function scopeSearch($query, $search) {
        if($search && $search != "") {
            return $query->where("name", "like", "%$search%");
        }
        return $query;
    }

}
