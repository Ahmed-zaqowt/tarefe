<?php

namespace App\Http\Controllers\Client\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    function index() {

       return view('clinet.NotPayR');
    }

    function in_preparation()  {
      $orders = Order::query()->where('status' , '1')->with(['carts.product'])->where('user_id' , Auth::user()->id)->get();
      return view('clinet.loadingR' , compact('orders'));
    }
}
