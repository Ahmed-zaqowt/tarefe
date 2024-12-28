<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MainCategory>
 */
class MainCategoryFactory extends Factory
{
    protected $model = \App\Models\MainCategory::class;

    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'product', true), // صورة عشوائية
            'name' => $this->faker->words(2, true), // اسم عشوائي للقسم الرئيسي
            'description' => $this->faker->sentence, // وصف عشوائي
            'coupon_id' => \App\Models\Coupon::factory()->create()->id, // ربط بكوبون عشوائي
        ];
    }
}
