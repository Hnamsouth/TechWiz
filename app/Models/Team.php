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
        'logo',
        'level',
    ];
    use HasFactory;

    public function MatchLineups(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MatchLineups::class,'team_id','id');
    }
    public function Players(){
        return $this->belongsToMany(Players::class,'team_player');
    }

}
