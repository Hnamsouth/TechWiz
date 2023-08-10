<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable=[

        'name',
        'country',
        'logo',
    ];
    use HasFactory;

    public function matches() {
        return $this->hasMany(Match::class);
    }
}
