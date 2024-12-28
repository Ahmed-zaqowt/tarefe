<?php

namespace App\Models;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MainCategory extends Model
{
    use HasFactory;
    protected $guarded = [] ;

    public function coupon() {
        return $this->belongsTo(Coupon::class);
    }

    public function subCategories() {
        return $this->hasMany(SubCategory::class);
    }

    public function companies()
{
    return $this->hasMany(Company::class, 'main_branch_id');
}
}
