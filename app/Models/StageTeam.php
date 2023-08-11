<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StageTeam extends Model
{
    use HasFactory;
    protected $table='stage_team';
    protected  $fillable=[
        'index',
        'league_stage_id',
        'euro_world_season_id',
        't1_id',
        't2_id',
        't3_id',
        't4_id',
        't5_id',
        't6_id',
    ];
}
