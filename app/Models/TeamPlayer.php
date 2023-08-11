<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamPlayer extends Model
{
    use HasFactory;

    protected $table='team_player';
    protected $fillable=[
        'position',
        'player_id',
        'team_id',
    ];

    public function scopeTeam($query,$team_id){
        if($team_id && $team_id!=0){
            return $query->where('team_id',$team_id);
        }
        return $query;
    }
}
