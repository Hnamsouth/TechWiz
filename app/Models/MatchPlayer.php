<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchPlayer extends Model
{
    use HasFactory;

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
    ];
}
