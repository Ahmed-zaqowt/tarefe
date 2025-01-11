<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    // orders_in_preparation = 1
    //


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // علاقة مع User (كل طلب ينتمي إلى مستخدم)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
