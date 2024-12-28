<?php

namespace App\Http\Controllers\Dashboard\SubCategory;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubCategoryController extends Controller
{
    function index()
    {
        $maincat =  MainCategory::all();
        return view('dashboard.subcategory.index' , compact('maincat'));
    }

    function getdata(Request $request)
    {
        $comments = SubCategory::query();
        return DataTables::of($comments)
            ->addIndexColumn()
            ->filter(function ($query) use ($request) {
                if ($request->get('name')) {
                    $query->where('name', 'like', '%' . $request->get('name') . '%');
                }

                if ($request->get('main')) {
                   $main =  MainCategory::where('name' , 'like', '%' .$request->get('main').'%')->first();
                        $query->where('main_category_id',$main->id);

                }
            })
            ->addColumn('maincat', function ($qur) {

                $string = '<div style="background-color: #9c6bd4 " class="badge rounded-pill ">'. $qur->mainCategory->name .'</div>' ;

                return $string;
            })
            ->addColumn('actions', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-name="' . $qur->name . '"';
                $data_attr .= 'data-id="' . $qur->id . '"';
                $data_attr .= 'data-main_category_id="' . $qur->main_category_id . '"';
                $string = '';
                $string .= '
           <div class="d-flex align-items-center gap-3 fs-6">
                  <div  class="btn-square edit_btn"
        title="تعديل" data-bs-toggle="modal" data-bs-target="#edit-modal"  ' . $data_attr . '><i class="bi bi-pencil-fill"></i></div>

                  <div class="btn-square delete_btn"
        title="حذف" data-id="' . $qur->id . '" data-url="/tarefe/dashboard/subcategory/delete"><i class="bi bi-trash-fill"></i></div>
                </div>';
                return $string;
            })
            ->rawColumns(['maincat', 'actions'])
            ->make(true);
    }


    function store(Request $req)
     {
      $req->validate([
              'name' => 'required' ,
              'maincat' => 'required'
      ]);

      SubCategory::create([
        'name' => $req->name ,
        'main_category_id' => $req->maincat ,
      ]);

      return response()->json() ;

     }


     function update(Request $req) {
        $req->validate([
            'name' => 'required' ,
            'maincat' => 'required'
        ]);

        $maincategory = SubCategory::query()->where('id' , $req->id)->first();

        $maincategory->update([
            'name' => $req->name ,
            'main_category_id' => $req->maincat ,
        ]);

        return response()->json() ;

     }

        function delete(Request $request){
            SubCategory::query()->where('id' , $request->id)->delete();
            return response()->json() ;
        }

        function searchName(Request $req) {

                $query = $req->get('query');
                $results = SubCategory::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
                return $results;

        }

        public function products(SubCategory $category)
    {
        $products = $category->products; // افتراض وجود علاقة بين الأقسام والمنتجات
        return response()->json(['products' => $products]);
    }
}
