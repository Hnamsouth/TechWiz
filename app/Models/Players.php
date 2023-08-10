<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    protected $table='players';

    protected $fillable=[
        'name',
        'nationality',
        'position',
        'date_of_birth',
        'img',
        'description',
        'number',
        'height',
        'weight',
    ];

    public function MatchEvents(){
        return $this->hasMany(MatchEvent::class);
    }

    public function Team(){
        return $this->belongsToMany(Team::class,'team_player');
    }
}
