<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Coupon;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    function index()
    {
        $subcat = SubCategory::all();
        $coupons = Coupon::all();
        $company = Company::all();
        return view('dashboard.product.index', compact('coupons', 'company', 'subcat'));
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

                if ($request->get('price')) {
                    $query->where('price', $request->get('price'));
                }

                if ($request->get('subcat')) {
                    $subcat = SubCategory::where('name', $request->get('subcat'))->first();
                    $query->where('sub_category_id', $subcat->id);
                }

                if ($request->get('code')) {
                    $coupon = Coupon::where('code', 'like', '%' . $request->get('code') . '%')->first();
                    $query->where('coupon_id', $coupon->id);
                }

                if ($request->get('maincat')) {
                    // الحصول على القسم الرئيسي
                    $mainCategory = MainCategory::where('name', $request->get('maincat'))->first();

                    if ($mainCategory) {
                        // الحصول على معرفات الأقسام الفرعية التي تتبع القسم الرئيسي
                        $subCategoryIds = $mainCategory->subCategories->pluck('id');

                        // تصفية المنتجات بناءً على الأقسام الفرعية
                        $query->whereIn('sub_category_id', $subCategoryIds);
                    }
                }
            })
            ->addColumn('sizes', function ($product) {


                $sizes = $product->sizes;

                if (empty($sizes) || collect($sizes)->every(function ($size) {
                    return empty($size['name']) && empty($size['quantity']);
                })) {
                    return 'لا مقاسات';
                }

                if ($product->sizes) {
                    $sizes = json_decode($product->sizes, true);
                    return collect($sizes)->map(function ($size) {
                        return "{$size['name']}:{$size['quantity']}";
                    })->implode(' / ');
                }
            })

            ->addColumn('price', function ($qur) {
                $string = '<div style="background-color: #9c6bd4 " class="badge rounded-pill ">₪' . $qur->price . '</div>';

                return $string;;
            })
            ->addColumn('company', function ($qur) {
                if (@$qur->company->name) {
                    return $qur->company->name;
                }

                return 'غير معروف';
            })
            ->addColumn('quantity', function ($qur) {

                if ($qur->total_quantity) {
                    return $qur->total_quantity . ' قطعة ';
                }
                return 'نفدت الكمية';
            })
            ->addColumn('subcat', function ($qur) {
                return "<small>(" . $qur->subCategory->mainCategory->name . ")</small>" .  $qur->subCategory->name;
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
            ->addColumn('video', function ($qur) {
                return ' <video id="videoPlayer" controls width="70%">
                    <source id="videoSource" src="' . asset("uploads/videos/product_1731957176_Video_2024-11-18_211039.wmv") . '" >
                    متصفحك لا يدعم مشغل الفيديو.
                </video>';
            })->addColumn('discount_code', function ($qur) {
                if (is_null(@$qur->coupon->code)) {
                    $string = '<div style="background-color: #963aff " class="badge rounded-pill ">لا يوجد خصم</div>';
                } else {
                    $string = '<div style="background-color: #963aff " class="badge rounded-pill ">' . @$qur->coupon->code . '(%' . @$qur->coupon->discount_percentage . ')</div>';
                }
                return $string;
            })->addColumn('album', function ($qur) {
                $images = json_decode($qur->album); // تحويل JSON إلى مصفوفة (إذا كانت الصور مخزنة كـ JSON)


                if (!empty($images)) {
                    $swiperHtml = '<div class="swiper-container album-swiper" style="width: 90px; height: 90px; border: 1px solid #ddd; border-radius: 4px; padding: 2px;">
                                      <div class="swiper-wrapper">';
                    foreach ($images as $image) {
                        $swiperHtml .= '<div class="swiper-slide">
                                            <img src="' . asset('/uploads/images/' . $image)  . '" alt="Image" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>';
                    }
                    $swiperHtml .= '</div>
                                    <div class="swiper-button-next" style="font-size: 10px; color: #000;"></div>
                                    <div class="swiper-button-prev" style="font-size: 10px; color: #000;"></div>
                                  </div>';
                    return $swiperHtml;
                }
                return '<span>No Images</span>'; // في حال عدم وجود صور
            })

            ->addColumn('actions', function ($qur) {
                //  $sizes = $qur->sizes ;

                $data_attr = '';
                $data_attr .= 'data-name="' . $qur->name . '"';
                $data_attr .= 'data-subcat="' . $qur->sub_category_id . '"';
                $data_attr .= 'data-price="' . $qur->price . '"';
                $data_attr .= 'data-desc="' . $qur->description . '"';
                $data_attr .= 'data-total_quantity="' . $qur->total_quantity . '"';
                $data_attr .= 'data-company="' . $qur->company_id . '"';
                $data_attr .= 'data-coupon="' . $qur->coupon_id . '"';
                $data_attr .= 'data-sizes="' . htmlspecialchars($qur->sizes, ENT_QUOTES, 'UTF-8') . '"';
                $data_attr .= 'data-id="' . $qur->id . '"';
                $string = '';
                $string .= '
           <div class="d-flex align-items-center gap-2 fs-6">
                  <div  class="btn-square edit_btn"
        title="تعديل" data-bs-toggle="modal" data-bs-target="#edit-modal"  ' . $data_attr . '><i class="bi bi-pencil-fill"></i></div>

                  <div class="btn-square delete_btn"
        title="تعديل" data-id="' . $qur->id . '" data-url="/tarefe/dashboard/products/delete"><i class="bi bi-trash-fill"></i></div>
                </div>';
                return $string;
            })
            ->rawColumns(['album', 'quantity', 'sizes', 'discount_code', 'video', 'description', 'price', 'image', "subcat", 'actions'])
            ->make(true);
    }


    function store(Request $req)
    {
        // dd($req->all());

        $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'total_quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1',
            'subcat' => 'required|exists:sub_categories,id',
            'company_id' => 'nullable|exists:companies,id',
            'album' => 'nullable|array',
            'photo' => 'required',
            'video' => [
                'nullable',
                'file',
                'max:102400',
            ],
            'sizes' => 'nullable|array',
            'colors' => 'nullable|array',
        ]);

        if ($req->has('size')) {
            $validatedData = $req->validate([
                'sizes.*.name' => 'required|string',
                'sizes.*.quantity' => 'required|integer|min:0',
            ]);


            $totalSizesQuantity = collect($req->input('sizes', []))->sum('quantity');

            if ($totalSizesQuantity !== $req->input('total_quantity')) {
                return back()->withErrors(['sizes' => 'مجموع كميات المقاسات يجب أن يساوي الكمية الإجمالية.']);
            }
        }


        // stor image
        $imagename = 'product_' . time() . '_' . $req->file('photo')->getClientOriginalName();
        $req->file('photo')->move(public_path('uploads/images'), $imagename);
        // store video
        /*
        $videoname = 'product_' . time() . '_' . $req->file('video')->getClientOriginalName();
        $req->file('video')->move(public_path('uploads/videos'), $videoname);
*/

        $album = [];
        if ($req->hasFile('album')) {
            foreach ($req->file('album') as $file) {
                $albumname = 'product_' . time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/images'), $albumname);
                $album[] = $albumname;
            }
        }



        Product::create([
            'name' => $req->name,
            'slug' => Str::slug($req->name),
            'description' => $req->description,
            'price' => $req->price,
            'sub_category_id' => $req->subcat,
            'image' => $imagename,
            'album' => $req->has('sizes') ? json_encode($album) : null,
            'company_id' => $req->company_id,
            'coupon_id' => $req->coupon,
            'total_quantity' => $req->input('total_quantity'),
            'sizes' => $req->has('sizes') ? json_encode($validatedData['sizes']) : null,
            'colors' => $req->has('colors') ? json_encode($validatedData['colors']) : null,
        ]);

        return response()->json();
    }


    function update(Request $req)
    {
        $req->validate([
            'name' => 'required'
        ]);

        $imagename = 'product_' . time() . '_' . $req->file('photo')->getClientOriginalName();
        $req->file('photo')->move(public_path('uploads/images'), $imagename);
        $maincategory = Product::query()->where('id', $req->id)->first();

        if ($req->hasFile('image')) {
            File::delete(public_path('uploads/images/' . $maincategory->image));
            $imagename = 'product_' . time() . '_' . $req->file('image')->getClientOriginalName();
            $req->file('image')->move(public_path('uploads/images'), $imagename);
        }

        $maincategory->update([
            'name' => $req->name,
            'slug' => Str::slug($req->name),
            'description' => $req->desc,
            'price' => $req->price,
            'sub_category_id' => $req->subcat,
            'image' => $imagename,
            'company_id' => $req->company_id,
        ]);

        return response()->json();
    }



    function delete(Request $request)
    {
        Product::query()->where('id', $request->id)->delete();
        return response()->json();
    }


    ///////////////////////////

    function searchSubCategory(Request $req)
    {
        $query = $req->get('query');
        $results = SubCategory::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
        return $results;
    }

    function searchMainCategory(Request $req)
    {
        $query = $req->get('query');
        $results = MainCategory::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
        return $results;
    }
    function searchName(Request $req)
    {
        $query = $req->get('query');
        $results = Product::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
        return $results;
    }
    public function getCompanies($main_category_id)
    {
        $companies = \App\Models\Company::where('main_branch_id', $main_category_id)->get();
        return response()->json($companies);
    }
}
