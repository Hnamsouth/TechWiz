<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeagueSeason extends Model
{
    use HasFactory;
    protected $table ='league_season';
    protected  $fillable=[
        'season',
        'started_at',
        'description',
        'round',
        'league_id',
    ];

    public  function League(){
        return $this->belongsTo(League::class);
    }
    public function Matches(){
        return $this->hasMany(Match::class,'league_season_id','id');
    }

    public function scopeSeason($query,$season){
        if($season && $season!=""){
            return $query->where('season','=',$season);
        }
        return $season;
    }

}
