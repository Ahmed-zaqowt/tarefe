<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // عدد الكوبونات التي سيتم إنشاؤها
       // \App\Models\Coupon::factory(10)->create();
       // \App\Models\Area::factory(10)->create();
        //\App\Models\User::factory(1)->create();

        // عدد الأقسام الرئيسية التي سيتم إنشاؤها
        //\App\Models\MainCategory::factory(5)->create();

        // عدد الأقسام الفرعية التي سيتم إنشاؤها
        //\App\Models\SubCategory::factory(15)->create();
        //\App\Models\Company::factory(15)->create();

        // عدد المنتجات التي سيتم إنشاؤها
         \App\Models\Product::factory(1000)->create();
        //  \App\Models\Follow::factory(10)->create(); // إدخال 10 سجلات عشوائية

    }

}
