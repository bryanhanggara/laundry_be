<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function promos()
    {
        return $this->hasMany(Promo::class);
    }
}
