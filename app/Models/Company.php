<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [];


    function getProducts($id)
    {
        $products =  Product::query()->where('company_id', $id)->paginate(4);
        return $products;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'company_id', 'user_id');
    }
}
