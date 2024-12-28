<?php

namespace App\Http\Controllers\Client\Following;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{
  function index() {
      $follwing = Auth::user()->followedCompanies;
      $companies = Company::query()->has('products')->with('products')->paginate(4);
    return view('clinet.following' , compact('companies' , 'follwing'));
  }
}
