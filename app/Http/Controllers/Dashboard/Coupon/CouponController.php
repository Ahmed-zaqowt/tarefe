<?php

namespace App\Http\Controllers\Dashboard\Coupon;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CouponController extends Controller
{
    function index()
    {
        return view('dashboard.coupon.index');
    }

    function getdata(Request $request)
    {

        $comments = Coupon::query();
        return DataTables::of($comments)
            ->addIndexColumn()
            ->filter(function ($query) use ($request) {
                if ($request->get('code')) {
                    $query->where('code', 'like', '%' . $request->get('code') . '%');
                }

                if ($request->get('discount_percentage')) {
                    $query->where('discount_percentage',$request->get('discount_percentage'));
                }
            })
            ->addColumn('remaining_days', function ($qur) {
                $expiryDate = Carbon::parse($qur->expiry_date); // تاريخ انتهاء الكوبون
                $remainingDays = Carbon::now()->diffInDays($expiryDate, false); // عدد الأيام المتبقية (قد تكون سالبة)

                // التحقق من حالة الكوبون (منتهي أو لا)
                if ($remainingDays < 0) {
                    $remaining_days = 'منتهي الصلاحية';
                } else {
                    if ($remainingDays == 1) {
                        $remaining_days = 'يوم واحد';
                    } elseif ($remainingDays == 2) {
                        $remaining_days = 'يومان';
                    } elseif ($remainingDays >= 3 && $remainingDays <= 10) {
                        $remaining_days = $remainingDays . ' أيام';
                    } else {
                        $remaining_days = $remainingDays . ' يوماً';
                    }
                }

                // إرجاع النص مع تنسيق باستخدام Bootstrap badge
                return '<div style="background-color: #9c6bd4; color: white;" class="badge rounded-pill">' . $remaining_days . '</div>';
            })
            ->addColumn('expiry_date', function ($qur) {
                $date = Carbon::parse($qur->expiry_date)->isoFormat('Do MMMM YYYY');
                return $date;
                })
                ->addColumn('code', function ($qur) {
                    if (!str_starts_with($qur->code, '#')) {
                      return  '#' . $qur->code;
                    }
                    return   $qur->code ;
                    })
                ->addColumn('discount_percentage', function ($qur) {
                    return '%' .  $qur->discount_percentage ;
                })
            ->addColumn('actions', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-name="' . $qur->name . '"';
                $data_attr .= 'data-subcat="' . $qur->sub_category_id . '"';
                $data_attr .= 'data-price="' . $qur->price . '"';
                $data_attr .= 'data-desc="' . $qur->description . '"';
                $data_attr .= 'data-id="' . $qur->id . '"';
                $string = '';
                $string .= '
           <div class="d-flex align-items-center gap-3 fs-6">
                  <div  class="btn-square edit_btn"
        title="تعديل" data-bs-toggle="modal" data-bs-target="#edit-modal"  ' . $data_attr . '><i class="bi bi-pencil-fill"></i></div>

                  <div class="btn-square delete_btn"
        title="تعديل" data-id="' . $qur->id . '" data-url="/tarefe/dashboard/products/delete"><i class="bi bi-trash-fill"></i></div>
                </div>';
                return $string;
            })
            ->rawColumns(['remaining_days','expiry_date','price','image',"subcat", 'actions'])
            ->make(true);
    }


    function store(Request $req)
    {
        $validatedData = $req->validate([
            'code' => [
                'required',                 // الحقل مطلوب
                'string',                   // يجب أن يكون نصًا
                'regex:/^#[^\s]*$/',        // يجب أن يبدأ بعلامة # ولا يحتوي على مسافات
                'unique:coupons,code', // يجب أن يكون الكود فريدًا في جدول الكوبونات
            ],
            'discount_percentage' => [
                'required',                 // الحقل مطلوب
                'numeric',                  // يجب أن يكون رقمًا
                'between:1,100',            // يجب أن يكون بين 1 و 100
            ],
            'expiry_date' => [
                'required',                 // الحقل مطلوب
                'date',                     // يجب أن يكون تاريخًا
                'after:today',              // يجب أن يكون تاريخ انتهاء بعد اليوم الحالي
            ],
        ], [
            // الرسائل المخصصة
            'code.required' => 'يجب إدخال كود الخصم.',
            'code.regex' => 'يجب أن يبدأ كود الخصم بعلامة # ولا يحتوي على مسافات.',
            'code.unique' => 'كود الخصم مستخدم بالفعل.',
            'discount_percentage.required' => 'يجب إدخال النسبة المئوية.',
            'discount_percentage.numeric' => 'يجب أن تكون النسبة المئوية رقمًا.',
            'discount_percentage.between' => 'يجب أن تكون النسبة المئوية بين 1 و 100.',
            'expiry_date.required' => 'يجب إدخال تاريخ انتهاء.',
            'expiry_date.date' => 'يجب أن يكون تاريخًا صالحًا.',
            'expiry_date.after' => 'يجب أن يكون تاريخ الانتهاء بعد اليوم الحالي.',
        ]);

        $discountCode = $req->get('discount_code');

        // تحقق إذا لم يبدأ الكود بعلامة #
        if (!str_starts_with($discountCode, '#')) {
            $discountCode = '#' . $discountCode;
        }

        Coupon::create([
            'code' => $req->code,
            'discount_percentage' =>$req->discount_percentage ,
            'expiry_date' => $req->expiry_date,
        ]);

        return response()->json();
    }


    function update(Request $req)
    {
        $req->validate([
            'name' => 'required'
        ]);

        $maincategory = Coupon::query()->where('id', $req->id)->first();

        $maincategory->update([
            'name' => $req->name,
        ]);

        return response()->json();
    }



    function delete(Request $request)
    {
        Coupon::query()->where('id', $request->id)->delete();
        return response()->json();
    }

    function searchCode(Request $req)
    {
        $query = $req->get('query');
        $results = Coupon::where('code', 'LIKE', "%{$query}%")->pluck('code')->unique();
        return $results;
    }
    function products(Request $req)
    {
        return view('dashboard.coupon.products');
    }
    function getproduct(Request $request) {
        $comments = Product::query()->whereNotNull('coupon_id');
        return DataTables::of($comments)
            ->addIndexColumn()
            ->addColumn('product', function ($qur) {
               return $qur->name ;
            })
            ->addColumn('remaining_days', function ($qur) {
                $expiryDate = Carbon::parse($qur->coupon->expiry_date); // تاريخ انتهاء الكوبون
                $remainingDays = Carbon::now()->diffInDays($expiryDate, false); // عدد الأيام المتبقية (قد تكون سالبة)
                // التحقق من حالة الكوبون (منتهي أو لا)
                if ($remainingDays < 0) {
                    $remaining_days = 'منتهي الصلاحية';
                } else {
                    if ($remainingDays == 1) {
                        $remaining_days = 'يوم واحد';
                    } elseif ($remainingDays == 2) {
                        $remaining_days = 'يومان';
                    } elseif ($remainingDays >= 3 && $remainingDays <= 10) {
                        $remaining_days = $remainingDays . ' أيام';
                    } else {
                        $remaining_days = $remainingDays . ' يوماً';
                    }
                }

                // إرجاع النص مع تنسيق باستخدام Bootstrap badge
                return '<div style="background-color: #9c6bd4; color: white;" class="badge rounded-pill">' . $remaining_days . '</div>';
            })
            ->addColumn('expiry_date', function ($qur) {
                $date = Carbon::parse($qur->coupon->expiry_date)->isoFormat('Do MMMM YYYY');
                return $date;
                })
                ->addColumn('code', function ($qur) {
                    if (!str_starts_with($qur->coupon->code, '#')) {
                      return  '#' . $qur->coupon->code;
                    }
                    return   $qur->coupon->code ;
                    })
                ->addColumn('discount_percentage', function ($qur) {
                    return '%' .  $qur->coupon->discount_percentage ;
                })
            ->addColumn('actions', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-name="' . $qur->name . '"';
                $data_attr .= 'data-subcat="' . $qur->sub_category_id . '"';
                $data_attr .= 'data-price="' . $qur->price . '"';
                $data_attr .= 'data-desc="' . $qur->description . '"';
                $data_attr .= 'data-id="' . $qur->id . '"';
                $string = '';
                $string .= '
           <div class="d-flex align-items-center gap-3 fs-6">
                  <div  class="btn-square edit_btn"
        title="تعديل" data-bs-toggle="modal" data-bs-target="#edit-modal"  ' . $data_attr . '><i class="bi bi-pencil-fill"></i></div>

                  <div class="btn-square delete_btn"
        title="تعديل" data-id="' . $qur->id . '" data-url="/tarefe/dashboard/products/delete"><i class="bi bi-trash-fill"></i></div>
                </div>';
                return $string;
            })
            ->rawColumns(['product','remaining_days','expiry_date','price',"subcat", 'actions'])
            ->make(true);
    }

}
