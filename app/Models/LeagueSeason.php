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
}
///hahahahhahaha
