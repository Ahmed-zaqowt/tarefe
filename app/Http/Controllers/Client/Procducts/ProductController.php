<?php

namespace App\Http\Controllers\Client\Procducts;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index() {
         $products = Product::paginate(16);
         return view('clinet.products' , compact('products'));
    }

    function showproduct($id) {
        $product = Product::query()->findOrFail($id) ;
        $products = Product::query()->paginate(16) ;
        return view('clinet.product'  , compact('product' , 'products'));
    }

    function addToCard(Request $request) {

         $product = Product::query()->findOrFail($request->id);
         $qun = $request->qun ;

         if(!$request->qun){
          $qun = 1 ;
         }

         Cart::create([
            'product_id' => $request->id ,
            'user_id' => Auth::user()->id ,
            'quantity' => $qun ,
         ]);

         return response()->json() ;
     }

     function addToFavorite(Request $request) {

          // dd($request->all());
        if($request->type === 'yes'){
            $fav = Favorite::query()->where('product_id' , $request->id)->first();
            $fav->delete();
        }else{
            Favorite::create([
                'product_id' => $request->id ,
                'user_id' => Auth::user()->id ,
             ]);
        }


        return response()->json() ;
    }

    function favorite() {
       $favorites = Favorite::query()->where('user_id' , Auth::user()->id)->get();
       return view('clinet.favorate'  , compact('favorites')) ;
    }

   function addtocart(Request $request) {

        Cart::create([
            'user_id' => $request->user_id ,
             'product_id' => $request->product_id ,
             'quantity' => $request->quantity
        ]);

        return response()->json();

   }

   function cart() {
    $products = Product::query()->paginate(12);
    $carts = Cart::query()->where('user_id' , Auth::user()->id)->whereNull('order_id')->get();
      return view('clinet.cart' , compact('carts' , 'products'));
   }
}
