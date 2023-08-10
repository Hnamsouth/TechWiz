<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'desc'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function scopeSearch($query, $search) {
        if($search && $search != "") {
            return $query->where("name", "like", "%$search%");
        }
        return $query;
    }

    /*public function scopeStatus($query, $status) {
        if($status == null) {
            return $query;
        }
        return $query->where("status", $status);
    }*/
}
