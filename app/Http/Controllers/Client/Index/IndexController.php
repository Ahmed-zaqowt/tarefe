<?php

namespace App\Http\Controllers\Client\Index;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() {
        $mains = MainCategory::query()->paginate(18);
        $prices_low = Product::query()->whereNotNull('coupon_id')->paginate(6);
        $best_seller = Product::query()->whereNotNull('coupon_id')->paginate(10);
        $coupons = Product::query()->whereNotNull('coupon_id')->paginate(4);
        $trends = Product::where('trend' , 1)->paginate(6);
        $terazs = Product::where('teraz' , 1)->paginate(4);
        $selles = Product::where('selles' , 1)->paginate(4);

       return view('clinet.index' , compact('selles'  ,'terazs'  ,'trends'  ,'mains'  ,'prices_low' , 'coupons' , 'best_seller'));
    }
}
