<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Validation\Rules;

class UserController extends Controller
{

    function index()
    {
        return view('dashboard.users.index');
    }

    function getdata(Request $request)
    {

        $comments = User::query()->where('type' , 'user');
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
                $data_attr .= 'data-email="' . $qur->price . '"';
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
        $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return response()->json();
    }


    function update(Request $req)
    {
        $req->validate([
            'name' => 'required'
        ]);

        $maincategory = User::query()->where('id', $req->id)->first();

        $maincategory->update([
            'name' => $req->name,
        ]);

        return response()->json();
    }



    function delete(Request $request)
    {
        User::query()->where('id', $request->id)->delete();
        return response()->json();
    }

    function searchName(Request $req)
    {
        $query = $req->get('query');
        $results = User::where('name', 'LIKE', "%{$query}%")->pluck('name')->unique();
        return $results;
    }

}
