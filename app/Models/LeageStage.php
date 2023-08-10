<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeageStage extends Model
{
    use HasFactory;
    protected $table ='league_stage';
    protected  $fillable=[
        'name'
    ];

}
