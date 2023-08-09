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
}