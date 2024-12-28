<?php

namespace App\Models;

use App\Models\Coupon;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function details()
    {
        return $this->hasOne(Product::class); // إذا كان لكل منتج تفاصيل إضافية في جدول آخر
    }

    public function usersWhoFavorited()
    {
        return $this->belongsToMany(User::class, 'favorites', 'product_id', 'user_id')
            ->withTimestamps();
    }

    public function checkfavorite($id)
    {
        $product = Favorite::where('product_id', $id)->first();
        if (!$product) {
            return 'no';
        } else {
            return 'yes';
        }
    }

    protected $casts = [
        'album' => 'array',
    ];
}
