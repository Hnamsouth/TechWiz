<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coaches extends Model
{

    protected $table = 'coaches';

    protected $fillable = [
        'name',
        'nationality',
        'position',
        'date_of_birth',
        'img',
        'des',
        'club_team_id',
        'national_team_id',
    ];
    use HasFactory;

    public function Team(){
        return $this->belongsTo(Team::class);
    }
}
