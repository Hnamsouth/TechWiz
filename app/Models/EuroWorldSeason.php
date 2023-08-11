<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EuroWorldSeason extends Model
{
    use HasFactory;

    protected $table='euro_world_season';
    protected $fillable=[
        'season',
        'started_at',
        'description',
        'league_id',
    ];

    public function League(){
        return $this->belongsTo(League::class);
    }
}
