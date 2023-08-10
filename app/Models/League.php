<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $table ='league';
    protected $fillable=[
        'name',
        'country',
        'logo',
        'season'
    ];

    use HasFactory;
    public function matches() {
        return $this->hasMany(Match::class);
    }

    public function scopeSearch($query, $search) {
        if($search && $search != "") {
            return $query->where("name", "like", "%$search%");
        }
        return $query;
    }
}
