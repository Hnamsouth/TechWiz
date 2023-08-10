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
}
