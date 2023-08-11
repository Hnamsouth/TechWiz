<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchEvent extends Model
{
    use HasFactory;
    protected $table='match_event';
    protected $fillable=[
        'minute',
        'event_type', //  (Own goal, Normal Goal, Substitution, Yellow card, Red card,  Penalty, Miss Penalty)
        'time_at', // /(First Half, Second Half, Extra Time,Penalty Shootout )
        'first_player_id',
        'second_player_id',
        'match_id',
    ];

    public function Match(){
        return $this->belongsTo(Match::class);
    }

    public function FirstPlayer(){
        return $this->belongsTo(Players::class,'first_player_id');
    }

    public function SecondPlayer(){
        return $this->belongsTo(Players::class,'second_player_id');
    }
    public function scopeTimeAt($query,$time){
        if($time && $time!=""){
            return $query->where('time_at','=',$time);
        }
        return $query;
    }
    public function scopeType($query,$type){
        if($type && $type!=""){
            return $query->where('event_type','=',$type);
        }
        return $query;
    }

    public function scopeMatchSearch($query,$match_id){
        if($match_id && $match_id!=0){
            return $query->where('match_id','=',$match_id);
        }
        return $query;
    }
}
