<?php

namespace App\Http\Controllers\Dashboard\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index() {
       return view('dashboard.master') ;
    }
}
