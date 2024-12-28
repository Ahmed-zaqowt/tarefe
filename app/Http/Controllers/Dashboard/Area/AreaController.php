<?php

namespace App\Http\Controllers\Dashboard\Area;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AreaController extends Controller
{


        function index()
        {
            return view('dashboard.area.index');
        }

        function getdata(Request $request)
        {

            $comments = Area::query();
            return DataTables::of($comments)
                ->addIndexColumn()
                ->filter(function ($query) use ($request) {
                    if ($request->get('name')) {
                        $query->where('name', 'like', '%' . $request->get('name') . '%');
                    }

                    if ($request->get('price')) {
                        $query->where('price',$request->get('price'));
                    }
                })
                ->addColumn('actions', function ($qur) {
                    $data_attr = '';
                    $data_attr .= 'data-name="' . $qur->name . '"';
                    $data_attr .= 'data-price="' . $qur->price . '"';
                    $data_attr .= 'data-id="' . $qur->id . '"';
                    $string = '';
                    $string .= '
               <div class="d-flex align-items-center gap-3 fs-6">
                      <div  class="btn-square edit_btn"
            title="تعديل" data-bs-toggle="modal" data-bs-target="#edit-modal"  ' . $data_attr . '><i class="bi bi-pencil-fill"></i></div>

                      <div class="btn-square delete_btn"
            title="تعديل" data-id="' . $qur->id . '" data-url="/tarefe/dashboard/areas/delete"><i class="bi bi-trash-fill"></i></div>
                    </div>';
                    return $string;
                })
                ->rawColumns(['remaining_days','expiry_date','price','image',"subcat", 'actions'])
                ->make(true);
        }


        function store(Request $req)
        {
            $validatedData = $req->validate([
                'name' => [
                    'required',                 // الحقل مطلوب
                    'string',                   // يجب أن يكون نصًا
                    'unique:areas,name', // يجب أن يكون الكود فريدًا في جدول الكوبونات
                ],
                'price' => [
                    'required',                 // الحقل مطلوب
                    'numeric',                  // يجب أن يكون رقمًا
                    'min:1',            // يجب أن يكون بين 1 و 100
                ],

            ], [
                // الرسائل المخصصة
                'name.required' => 'يجب إدخال اسم المنطقة.',
                'code.unique' => ' اسم المنطقة مستخدم بالفعل.',
                'price.required' => 'يجب إدخال سعر التوصيل.',
                'price.numeric' => 'يجب أن تكون  القيمة رقمًا.',
                'price.min' => 'يجب أن تكون القيمة اكبر من 1    .',
            ]);



            Area::create([
                'name' => $req->name,
                'price' =>$req->price ,
            ]);

            return response()->json();
        }


        function update(Request $req)
        {
            $req->validate([
                'name' => 'required'
            ]);

            $maincategory = Area::query()->where('id', $req->id)->first();

            $maincategory->update([
                'name' => $req->name,
            ]);

            return response()->json();
        }



        function delete(Request $request)
        {
            Area::query()->where('id', $request->id)->delete();
            return response()->json();
        }

        function searchName(Request $req)
        {
            $query = $req->get('query');
            $results = Area::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
            return $results;
        }



    }


