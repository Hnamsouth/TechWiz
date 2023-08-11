<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchStatistical extends Model
{
    use HasFactory;
    protected $table='match_statistical';
    protected  $fillable=[
        'number_of_shots',
        'shot_on_Target',
        'ball_control',
        'passes',
        'accurate_passing_Rate',
        'foul',
        'yellow_card',
        'red_Card',
        'offside',
        'corner_kick',
        'match_id',
        'team_id',
    ];
}
