<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    protected $model = \App\Models\SubCategory::class;

    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'product', true), // صورة عشوائية
            'name' => $this->faker->words(2, true), // اسم عشوائي للقسم الفرعي
            'description' => $this->faker->sentence, // وصف عشوائي
            'main_category_id' => \App\Models\MainCategory::factory()->create()->id, // ربط بالقسم الرئيسي
            'coupon_id' => \App\Models\Coupon::factory()->create()->id, // ربط بكوبون عشوائي
        ];
    }
}
