<?php

namespace App\Http\Controllers\Client\Coupons;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
   function index() {
    $coupons = Coupon::query()->paginate(4);
    $excoupons = Coupon::query()->paginate(4);
     return view('clinet.copons' , compact('coupons' , 'excoupons'));
   }
}
