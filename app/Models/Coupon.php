<?php

namespace App\Models;

use Carbon\Carbon;

use App\Models\Product;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function mainCategories()
    {
        return $this->hasMany(MainCategory::class);
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getStartDate($id)
    {
        $coupon = $this->find($id);
        $startday = $coupon->created_at;
        $date = Carbon::parse($startday); // تاريخ محدد
        return $date->translatedFormat('j F Y');
    }

    public function getEndDate($id)
    {
        $coupon = $this->find($id);
        $endday = $coupon->expiry_date;
        $date = Carbon::parse($endday); // تاريخ محدد
        echo $date->translatedFormat('j F Y');
    }
}
