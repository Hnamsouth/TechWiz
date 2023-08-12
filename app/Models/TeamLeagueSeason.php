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
      'league_season_id',
      'euro_world_season_id'
    ];

    public function scopeLeagueSeason($query, $id){
        if($id && $id !=0){
            return $query->where('league_season_id','=',$id);
        }
        return $query;
    }

    public function Teams(){
        return $this->belongsTo(Team::class,'team_id');
    }
}
