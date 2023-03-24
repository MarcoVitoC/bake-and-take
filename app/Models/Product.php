<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class); // belongsTo berarti 1 post hanya memiliki 1 category
    }

    public function favorit()
    {
        return $this->hasMany(Favorit::class);
    }

    public function sale()
    {
        return $this->hasMany(Sale::class);
    }
}
