<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Tests\Integration\Database\EloquentHasManyThroughTest\Team;

class Player extends Model
{
    use HasFactory;

    protected $table ="players";

    protected $fillable = [
        "id","name","nationality","position","date_of_birth","img","des","number","height","weight","team_id"
    ];

    public function Team(){
        return $this->belongsTo(Team::class);
    }
}
