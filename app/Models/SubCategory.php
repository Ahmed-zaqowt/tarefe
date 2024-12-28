<?php

namespace App\Models;

use App\Models\Coupon;
use App\Models\MainCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [] ;

    public function mainCategory() {
        return $this->belongsTo(MainCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function coupon() {
        return $this->belongsTo(Coupon::class);
    }
}
