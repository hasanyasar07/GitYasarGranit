<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function collection(){
        return $this->belongsTo(Collection::class);
    }
}
