<?php

use App\Http\Controllers\Client\Index\IndexController;
use App\Http\Controllers\Client\Procducts\ProductController as ProcductsProductController;
use App\Http\Controllers\Dashboard\Area\AreaController;
use App\Http\Controllers\Dashboard\Company\CompanyController;
use App\Http\Controllers\Dashboard\Coupon\CouponController;
use App\Http\Controllers\Client\Coupons\CouponController as CouponClintController;
use App\Http\Controllers\Client\Following\FollowingController;
use App\Http\Controllers\Client\Orders\OrderController;
use App\Http\Controllers\Dashboard\Main\MainController;
use App\Http\Controllers\Dashboard\MainCategory\MainCategoryController;
use App\Http\Controllers\Dashboard\Product\ProductController;
use App\Http\Controllers\Dashboard\Settings\Feature\FeatureController;
use App\Http\Controllers\Dashboard\SubCategory\SubCategoryController;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Models\Company;
use App\Models\Coupon;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/categories/{category}/products', [SubCategoryController::class, 'products'])->name('categories.products');

    Route::prefix('tarefe')->group(function(){
        Route::prefix('dashboard')->middleware('auth')->name('dash.')->group(function (){

            Route::get('/' , [MainController::class ,  'index'])->name('index');

            Route::prefix('maincategory')->controller(MainCategoryController::class)->name('maincat.')->group(function (){
                Route::get('/' ,   'index')->name('index');
                Route::get('/getdata' ,  'getdata')->name('getdata');
                Route::post('/store' ,   'store')->name('store');
                Route::post('/update' ,  'update')->name('update');
                Route::post('/delete' ,  'delete')->name('delete');
                Route::prefix('search')->name('search.')->group(function (){
                    Route::get('/name' , 'searchName')->name('name');
                });
            });

            Route::prefix('subcategory')->controller(SubCategoryController::class)->name('subcat.')->group(function (){
                Route::get('/' , 'index')->name('index');
                Route::get('/getdata' ,  'getdata')->name('getdata');
                Route::post('/store' , 'store')->name('store');
                Route::post('/update' ,'update')->name('update');
                Route::post('/delete' , 'delete')->name('delete');
                Route::prefix('search')->name('search.')->group(function (){
                    Route::get('/name' , 'searchName')->name('name');
                });
            });

            Route::prefix('products')->controller(ProductController::class)->name('product.')->group(function (){
                Route::get('/' , 'index')->name('index');
                Route::get('/getdata' ,  'getdata')->name('getdata');
                Route::post('/store' , 'store')->name('store');
                Route::post('/update' ,'update')->name('update');
                Route::post('/delete' , 'delete')->name('delete');
                Route::get('/get-companies/{main_category_id}', [ProductController::class, 'getCompanies'])->name('get.companies');
                Route::prefix('search')->name('search.')->group(function (){
                    Route::get('/subCategory' , 'searchSubCategory')->name('subcategory');
                    Route::get('/name' , 'searchName')->name('name');
                    Route::get('/mainCategory' , 'searchMainCategory')->name('maincategory');
                });
            });

            Route::prefix('coupons')->controller(CouponController::class)->name('coupon.')->group(function (){
                Route::get('/' , 'index')->name('index');
                Route::get('/getdata' ,  'getdata')->name('getdata');
                Route::post('/store' , 'store')->name('store');
                Route::post('/update' ,'update')->name('update');
                Route::post('/delete' , 'delete')->name('delete');
                Route::prefix('search')->name('search.')->group(function (){
                Route::get('/code' , 'searchCode')->name('code');
                Route::get('/mainCategory' , 'searchMainCategory')->name('maincategory');
                });
                Route::prefix('products')->name('pro.')->group(function (){
                    Route::get('/' , 'products')->name('products');
                    Route::get('/getproduct' , 'getproduct')->name('getproduct');
                });
            });

            Route::prefix('companies')->controller(CompanyController::class)->name('company.')->group(function (){
                Route::get('/' , 'index')->name('index');
                Route::get('/getdata' ,  'getdata')->name('getdata');
                Route::post('/store' , 'store')->name('store');
                Route::post('/update' ,'update')->name('update');
                Route::post('/delete' , 'delete')->name('delete');
                Route::prefix('search')->name('search.')->group(function (){
                Route::get('/code' , 'searchCode')->name('code');
                Route::get('/mainCategory' , 'searchMainCategory')->name('maincategory');
                });
                Route::prefix('search')->name('search.')->group(function (){
                    Route::get('/name' , 'searchName')->name('name');
                });
            });

            Route::prefix('areas')->controller(AreaController::class)->name('area.')->group(function (){
                Route::get('/' , 'index')->name('index');
                Route::get('/getdata' ,  'getdata')->name('getdata');
                Route::post('/store' , 'store')->name('store');
                Route::post('/update' ,'update')->name('update');
                Route::post('/delete' , 'delete')->name('delete');
                Route::prefix('search')->name('search.')->group(function (){
                Route::get('/code' , 'searchCode')->name('code');
                Route::get('/mainCategory' , 'searchMainCategory')->name('maincategory');
                });
                Route::prefix('search')->name('search.')->group(function (){
                    Route::get('/name' , 'searchName')->name('name');
                });
            });

            Route::prefix('users')->controller(UserController::class)->name('user.')->group(function (){
                Route::get('/' , 'index')->name('index');
                Route::get('/getdata' ,  'getdata')->name('getdata');
                Route::post('/store' , 'store')->name('store');
                Route::post('/update' ,'update')->name('update');
                Route::post('/delete' , 'delete')->name('delete');
                Route::prefix('search')->name('search.')->group(function (){
                Route::get('/code' , 'searchCode')->name('code');
                Route::get('/mainCategory' , 'searchMainCategory')->name('maincategory');
                });
                Route::prefix('search')->name('search.')->group(function (){
                    Route::get('/name' , 'searchName')->name('name');
                });
            });

            Route::prefix('settings')->name('settings.')->group(function (){
                Route::prefix('features')->controller(FeatureController::class)->name('feature.')->group(function (){
                Route::get('/' , 'index')->name('index');
                Route::get('/getdata' ,  'getdata')->name('getdata');
                Route::post('/trend' ,  'trend')->name('trend');
                Route::post('/best' ,  'best')->name('best');
                Route::post('/selles' ,  'selles')->name('selles');
                Route::post('/low' ,  'low')->name('low');
                Route::post('/teraz' ,  'teraz')->name('teraz');
                Route::post('/manual' ,  'manual')->name('manual');
                });
            });


        });

        Route::middleware('auth')->name('client.')->group(function (){

            Route::get('/' , [IndexController::class ,  'index'])->name('index');

            Route::prefix('products')->controller(ProcductsProductController::class)->name('products.')->group(function (){
                Route::get('/' , 'index')->name('index');
                Route::get('/show-product/{id}' , 'showproduct')->name('showproduct');
                Route::post('/add-to-cart' , 'addtocart')->name('addtocart');
                Route::get('/favorite' , 'favorite')->name('favorite');
                Route::post('/add-to-card' , 'addToCard')->name('addToCard');
                Route::post('/add-to-favorite' , 'addToFavorite')->name('addToFavorite');
            });

            Route::prefix('coupons')->controller(CouponClintController::class)->name('coupon.')->group(function (){
                Route::get('/' , 'index')->name('index');
            });

            Route::prefix('following')->controller(FollowingController::class)->name('following.')->group(function (){
                Route::get('/' , 'index')->name('index');
            });

            Route::prefix('orders')->controller(OrderController::class)->name('order.')->group(function (){
                Route::get('/' , 'index')->name('index');
            });


        });
    });


    require __DIR__ . '/auth.php';










