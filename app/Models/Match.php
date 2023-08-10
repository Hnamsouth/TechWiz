<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{


    protected $table = 'matches';
    protected $fillable = [
        'datetime',
        'location',
        'first_team',
        'second_team',
        'league_id'


    ];
    use HasFactory;

    public function league() {
        return $this->belongsTo(League::class);
    }
    public function firstteam() {
        return $this->belongsTo(Team::class,'first_team');
    }
    public function secondteam() {
        return $this->belongsTo(Team::class,'second_team');
    }

    public function scopeSearch($query, $search) {
        if($search && $search != "") {
            return $query->where("first_team","or","second_team", "like", "%$search%");
        }
        return $query;
    }


}
