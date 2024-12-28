<?php

namespace App\Http\Controllers\Dashboard\Settings\Feature;

use App\Http\Controllers\Controller;
use App\Models\Manual;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FeatureController extends Controller
{
    function index()
    {

        $manual = Manual::first();
       // dd($manual);
        return view('dashboard.settings.features.index' , compact('manual'));
    }

    function getdata(Request $request)
    {
        $comments = Product::query();
        return DataTables::of($comments)
            ->addIndexColumn()
            ->filter(function ($query) use ($request) {
                if ($request->get('name')) {
                    $query->where('name', 'like', '%' . $request->get('name') . '%');
                }

                if ($request->get('feature')) {
                    if($request->get('feature') == '0'){
                        $query->where('trend', '1');
                    }elseif($request->get('feature') == '1'){
                        $query->where('best', '1');

                    }elseif($request->get('feature') == '2'){
                        $query->where('selles', '1');

                    }elseif($request->get('feature') == '3'){
                        $query->where('low', '1');

                    }elseif($request->get('feature') == '4'){
                        $query->where('teraz', '1');
                    }
                }
            })
            ->addColumn('image', function ($qur) {
                return  '<img style=" border: 1px solid #ddd;
                          border-radius: 4px;
                          padding: 2px;
                          width: 90px;" src="' . asset("uploads/images/$qur->image") . '" alt="Paris">';
                /*  return  '<img style=" border: 1px solid #ddd;
                          border-radius: 4px;
                          padding: 2px;
                          width: 90px;" src="' . $qur->image . '" alt="Paris">';*/
            })
            ->addColumn('trends', function ($qur) {

                $manual = Manual::first();
                if($manual->trend == 0){
                   $disabled = 'disabled' ;
                }

                $check = '';
                if ($qur->trend == 1) {
                    $check = 'checked';
                }
                return  '<form id="trend_form'.$qur->id.'" method="post" action="' . route('dash.settings.feature.trend') . '">
                <input name="_token" type="hidden" id="token" value="' . csrf_token() . '">
                <input name="status" id="status_trend" type="hidden" value="' . $qur->trend . '">
                <input name="id" type="hidden" value="' . $qur->id . '">
                         <div class="form-check form-switch">
                         <input data-id="'. $qur->id.'" data-status="'. $qur->trend.'"   name="trend" class="form-check-input trends_btn" type="checkbox" role="switch" id="flexSwitchCheckDefault"  ' . $check  . ' '.@$disabled.'>
                         </div>
                </form>
              ';
            })
            ->addColumn('bests', function ($qur) {
                $manual = Manual::first();
                if($manual->best == 0){
                   $disabled = 'disabled' ;
                }
                $check = '';
                if ($qur->best == 1) {
                    $check = 'checked';
                }
                return  '<form id="best_form'.$qur->id.'" method="post" action="' . route('dash.settings.feature.best') . '">
                <input name="_token" type="hidden" id="token" value="' . csrf_token() . '">
                <input name="status"  type="hidden" value="' . $qur->best . '">
                <input name="id" type="hidden" value="' . $qur->id . '">
                         <div class="form-check form-switch">
                         <input data-id="'. $qur->id.'" data-status="'. $qur->best.'"   name="best" class="form-check-input best_btn" type="checkbox" role="switch" id="flexSwitchCheckDefault"  ' . @$check  . ' '.@$disabled.'>
                         </div>
                </form>
              ';
            })
            ->addColumn('low', function ($qur) {
                $manual = Manual::first();
                if($manual->low == 0){
                   $disabled = 'disabled' ;
                }
                $check = '';
                if ($qur->low == 1) {
                    $check = 'checked';
                }
                return  '<form id="low_form'.$qur->id.'" method="post" action="' . route('dash.settings.feature.low') . '">
                <input name="_token" type="hidden" id="token" value="' . csrf_token() . '">
                <input name="status"  type="hidden" value="' . $qur->low . '">
                <input name="id" type="hidden" value="' . $qur->id . '">
                         <div class="form-check form-switch">
                         <input data-id="'. $qur->id.'" data-status="'. $qur->low.'"   name="low" class="form-check-input low_btn" type="checkbox" role="switch" id="flexSwitchCheckDefault"  ' . $check  . ' '.@$disabled.'>
                         </div>
                </form>
              ';
            })
            ->addColumn('sellers', function ($qur) {
                $manual = Manual::first();
                if($manual->selles == 0){
                   $disabled = 'disabled' ;
                }

                $check = '';
                if ($qur->selles == 1) {
                    $check = 'checked';
                }
                return  '<form id="selles_form'.$qur->id.'" method="post" action="' . route('dash.settings.feature.selles') . '">
                <input name="_token" type="hidden" id="token" value="' . csrf_token() . '">
                <input name="status"  type="hidden" value="' . $qur->selles . '">
                <input name="id" type="hidden" value="' . $qur->id . '">
                         <div class="form-check form-switch">
                         <input data-id="'. $qur->id.'" data-status="'. $qur->selles.'"   name="selles" class="form-check-input selles_btn" type="checkbox" role="switch" id="flexSwitchCheckDefault"  ' . $check  . ' '.@$disabled.'>
                         </div>
                </form>
              ';
            })->addColumn('teraz', function ($qur) {
                $manual = Manual::first();
                if($manual->teraz == 0){
                   $disabled = 'disabled' ;
                }
                $check = '';
                if ($qur->teraz == 1) {
                    $check = 'checked';
                }
                return  '<form id="teraz_form'.$qur->id.'" method="post" action="' . route('dash.settings.feature.teraz') . '">
                <input name="_token" type="hidden" id="token" value="' . csrf_token() . '">
                <input name="status"  type="hidden" value="' . $qur->teraz . '">
                <input name="id" type="hidden" value="' . $qur->id . '">
                         <div class="form-check form-switch">
                         <input data-id="'. $qur->id.'" data-status="'. $qur->teraz.'"   name="teraz" class="form-check-input teraz_btn" type="checkbox" role="switch" id="flexSwitchCheckDefault"  ' . $check  . ' '.@$disabled.'>
                         </div>
                </form>
              ';
            })
            ->rawColumns(['price', 'image',  'trends', 'bests', 'low', 'teraz', 'sellers'])
            ->make(true);
    }




    function trend(Request $req)
    {

        $trend = 0;
        $msg = "تم إزالة المنتج من التريند";
        if ($req->trend == 'on') {
            $trend = 1;
            $msg = "تم تعيين المنتج تريند";
        }

        $product = Product::where('id', $req->id)->first();
        $product->update([
            'trend' => $trend
        ]);

        return response()->json(["success" => $msg], 201);
    }

    function best(Request $req)
    {
        $best = 0;
       // dd($req->all());

        $msg = "تم إزالة المنتج من الاكثر مبيعا";
        if ($req->best == 'on') {
            $best = 1;
            $msg = "تم تعيين المنتج اكثر مبيعا";
        }
        $product = Product::where('id', $req->id)->first();
        $product->update([
            'best' => $best
        ]);

        return response()->json(["success" => $msg], 201);
    }

    function selles(Request $req)
    {
        $selles = 0;
       // dd($req->all());

        $msg = "تم إزالة المنتج من  المبيعات";
        if ($req->selles == 'on') {
            $selles = 1;
            $msg = "تم تعيين المنتج  للمبيعات";
        }
        $product = Product::where('id', $req->id)->first();
        $product->update([
            'selles' => $selles
        ]);

        return response()->json(["success" => $msg], 201);
    }

    function low(Request $req)
    {
        $low = 0;
       // dd($req->all());

        $msg = "تم إزالة المنتج من  المبيعات";
        if ($req->low == 'on') {
            $low = 1;
            $msg = "تم تعيين المنتج  للمبيعات";
        }
        $product = Product::where('id', $req->id)->first();
        $product->update([
            'low' => $low
        ]);

        return response()->json(["success" => $msg], 201);
    }

    function teraz(Request $req)
    {
        $teraz = 0;
       // dd($req->all());

        $msg = "تم إزالة المنتج من  المبيعات";
        if ($req->teraz == 'on') {
            $teraz = 1;
            $msg = "تم تعيين المنتج  للمبيعات";
        }
        $product = Product::where('id', $req->id)->first();
        $product->update([
            'teraz' => $teraz
        ]);

        return response()->json(["success" => $msg], 201);
    }

    function manual(Request $req)
    {

        $manual = Manual::updateOrCreate(
            ['id' => $req->id], // شرط البحث
            [
                'trend' => $req->trend == 'on' ? 1 : 0,
                'best' => $req->best == 'on' ? 1 : 0,
                'selles' => $req->selles == 'on' ? 1 : 0,
                'low' => $req->low == 'on' ? 1 : 0,
                'teraz' => $req->teraz == 'on' ? 1 : 0,
            ]
        );

        return response()->json(["success" => "تم تعديل الاعدادات اليدوية"], 201);
    }



}
