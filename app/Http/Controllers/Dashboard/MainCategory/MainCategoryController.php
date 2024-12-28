<?php

namespace App\Http\Controllers\Dashboard\MainCategory;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;
use Yajra\DataTables\Facades\DataTables;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class MainCategoryController extends Controller
{
    function index()
    {
        return view('dashboard.mainCategory.index');
    }

    function getdata(Request $request)
    {
        $comments = MainCategory::query();
        return DataTables::of($comments)
            ->addIndexColumn()
            ->filter(function ($query) use ($request) {
                if ($request->get('name')) {
                    $query->where('name', 'like', '%' . $request->get('name') . '%');
                }

                if ($request->get('sub')) {
                    // الحصول على الأقسام الفرعية المطابقة
                    $subs = SubCategory::where('name', 'like', '%' . $request->get('sub') . '%')->get();

                    // استخراج معرفات الأقسام الرئيسية المرتبطة
                    $mainCategoryIds = $subs->pluck('main_category_id')->unique();

                    // تصفية الأقسام الرئيسية بناءً على المعرّفات
                    $query->whereIn('id', $mainCategoryIds);
                }
            })
            ->addColumn('subcat', function ($qur) {
                $string = '';
                $string .= '
                    <div class="container">
                        <select  multiple  class="form-control w-50 h-25">
                           ';
                if (!$qur->subCategories) {
                    $string .= '<option>لا يوجد أقسام فرعية</option>';
                } else {
                    foreach ($qur->subCategories as $option) {
                        $string .= '<option value="' . strtolower(str_replace(' ', '_', $option)) . '">' . $option->name . '</option>';
                    }
                }
                $string .= '</select>
                    </div>';



                return $string;
            })
            ->addColumn('image', function ($qur) {
                return  '<img style=" border: 1px solid #ddd;
  border-radius: 4px;
  padding: 2px;
  width: 90px;" src="' . asset("uploads/images/$qur->image") . '" alt="Paris">';
                /*   return  '<img style=" border: 1px solid #ddd;
  border-radius: 4px;
  padding: 2px;
  width: 90px;" src="' . $qur->image . '" alt="Paris">';*/
            })
            ->addColumn('actions', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-name="' . $qur->name . '"';
                $data_attr .= 'data-id="' . $qur->id . '"';
                $data_attr .= 'data-image="' . asset('uploads/images/' . $qur->image) . '" '; // مسار الصورة

                $string = '';
                $string .= '
           <div class="d-flex align-items-center gap-3 fs-6">
                  <div  class="btn-square edit_btn"
        title="تعديل" data-bs-toggle="modal" data-bs-target="#edit-modal"  ' . $data_attr . '><i class="bi bi-pencil-fill"></i></div>

                  <div class="btn-square delete_btn"
        title="تعديل" data-id="' . $qur->id . '" data-url="/tarefe/dashboard/maincategory/delete"><i class="bi bi-trash-fill"></i></div>
                </div>';
                return $string;
            })
            ->rawColumns(['image', 'subcat', 'actions'])
            ->make(true);
    }


    function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'image' => 'required'
        ]);

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/images'), $filename);
        }

        MainCategory::create([
            'name' => $req->name,
            'image' => $filename
        ]);

        return response()->json();
    }


    function update(Request $req)
    {
        $req->validate([
            'name' => 'required'
        ]);

        $maincategory = MainCategory::query()->where('id', $req->id)->first();
        $filename = $maincategory->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/images'), $filename);
        }

        $maincategory->update([
            'name' => $req->name,
            'image' => $filename,
        ]);

        return response()->json();
    }



    function delete(Request $request)
    {
        MainCategory::query()->where('id', $request->id)->delete();
        return response()->json();
    }

    function searchName(Request $req)
    {

        $query = $req->get('query');
        $results = MainCategory::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
        return $results;
    }
}
