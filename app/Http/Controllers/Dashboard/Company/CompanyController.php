<?php

namespace App\Http\Controllers\Dashboard\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{
    function index()
    {
        $maincat = MainCategory::all();
        return view('dashboard.company.index', compact('maincat'));
    }

    function getdata(Request $request)
    {

        $comments = Company::query();
        return DataTables::of($comments)
            ->addIndexColumn()
            ->filter(function ($query) use ($request) {
                if ($request->get('name')) {
                    $query->where('name', 'like', '%' . $request->get('name') . '%');
                }
            })
            ->addColumn('description', function ($qur) {
                $desc = "
                    <div class='product' style='position: relative;'>
                        <div class='description-box'>
                            <p class='product-description'>
                                " . \Illuminate\Support\Str::words($qur->description, 10) . "
                            </p>
                        </div>
                        <div class='scroll-box'>
                            <p>" . $qur->description . "</p>
                        </div>
                    </div>";
                return $desc;
            })


            ->addColumn('image', function ($qur) {
                return  '<img style=" border: 1px solid #ddd;
  border-radius: 4px;
  padding: 2px;
  width: 90px;" src="'.asset("uploads/images/$qur->image").'" alt="Paris">' ;
              /*  return  '<img style=" border: 1px solid #ddd;
  border-radius: 4px;
  padding: 2px;
  width: 90px;" src="' . $qur->image . '" alt="Paris">';*/
            })
            ->addColumn('actions', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-name="' . $qur->name . '" ';
                $data_attr .= 'data-price="' . $qur->price . '" ';
                $data_attr .= 'data-desc="' . $qur->description . '" ';
                $data_attr .= 'data-id="' . $qur->id . '" ';
                $data_attr .= 'data-image="' . asset('uploads/images/' . $qur->image) . '" '; // مسار الصورة

                $string = '';
                $string .= '
                    <div class="d-flex align-items-center gap-3 fs-6">
                        <div class="btn-square edit_btn"
                            title="تعديل" data-bs-toggle="modal" data-bs-target="#edit-modal" ' . $data_attr . '>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                        <div class="btn-square delete_btn"
                            title="حذف" data-id="' . $qur->id . '" data-url="/tarefe/dashboard/companies/delete">
                            <i class="bi bi-trash-fill"></i>
                        </div>
                    </div>';
                return $string;
            })

            ->rawColumns(['discount_code', 'video', 'description', 'price', 'image', "subcat", 'actions'])
            ->make(true);
    }


    function store(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required',
        ]);
        // stor image
        $imagename = 'product_' . time() . '_' . $req->file('image')->getClientOriginalName();
        $req->file('image')->move(public_path('uploads/images'), $imagename);
       //  dd($imagename) ;
        Company::create([
            'name' => $req->name,
            'description' => $req->description,
            'image' => $imagename,
        ]);

        return response()->json();
    }


    function update(Request $req)
    {
         $req->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable',
        ]);

        $company = Company::query()->where('id', $req->id)->first();
        $imagename = $company->image;

        if($req->hasFile('image')) {
            File::delete(public_path('uploads/images/'.$company->image ));
            $imagename = 'product_'.time().'_'.$req->file('image')->getClientOriginalName();
            $req->file('image')->move(public_path('uploads/images'), $imagename);
        }

        $company->update([
            'name' => $req->name,
            'description' => $req->description ,
            'image' => $imagename ,
        ]);

        return response()->json();
    }



    function delete(Request $request)
    {
        Company::query()->where('id', $request->id)->delete();
        return response()->json();
    }


    ///////////////////////////

    function searchName(Request $req)
    {
        $query = $req->get('query');
        $results = Company::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
        return $results;
    }
/*
    function searchMainCategory(Request $req)
    {
        $query = $req->get('query');
        $results = MainCategory::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
        return $results;
    }

    public function getCompanies($main_category_id)
    {
        $companies = \App\Models\Company::where('main_branch_id', $main_category_id)->get();
        return response()->json($companies);
    }*/
}
