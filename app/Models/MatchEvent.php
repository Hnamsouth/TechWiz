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
        'event_type',
        'time_at',
        'first_player_id',
        'second_player_id',
        'match_id',
    ];

    public function Match(){
        return $this->belongsTo(Match::class);
    }

    public function Player($index){
        return $this->belongsTo(Players::class,$index?'first_player_id':'second_player_id','id');
    }
}
