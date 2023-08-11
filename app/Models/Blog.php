<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'league_id',
        'publish_date',
        'description'
        ];
    use HasFactory;

    public function scopeSearch($query,$search){
        if ($search && $search !=""){

            return $query -> where("title","like","%$search%");
        }
        return  $query;

    }
    public function League(){
        return $this->belongsTo(League::class);
    }
}
