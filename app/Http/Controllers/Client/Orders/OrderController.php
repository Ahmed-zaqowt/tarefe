<?php

namespace App\Http\Controllers\Client\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index() {
       
       return view('clinet.NotPayR');
    }
}
