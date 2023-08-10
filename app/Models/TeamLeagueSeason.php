<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLeagueSeason extends Model
{
    use HasFactory;
    protected $table='team_league_season';

    protected $fillable=[
      'team_id',
      'league_season_id'
    ];


}
