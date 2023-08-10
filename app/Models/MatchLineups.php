<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchLineups extends Model
{
    use HasFactory;

    protected $table ='match_lineups';
    protected $fillable=[
        'formations',
        'side',
        'match_id',
        'team_id',
    ];

    public function Match(){
        return $this->belongsTo(Match::class);
    }
    public  function Team(){
        return $this->belongsToMany(Team::class,'teams');
    }
}
