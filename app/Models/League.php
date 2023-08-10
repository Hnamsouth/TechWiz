<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $table ='league';
    protected $fillable=[
        'name',
        'country',
        'logo',
        'description',
        'role_des',
    ];

    public function LeagueSeason(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LeagueSeason::class,'league_id','id');
    }

    public function EuroWorldSeason(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EuroWorldSeason::class,'league_id','id');
    }

}
