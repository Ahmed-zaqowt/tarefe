<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = \App\Models\Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 500), // سعر بين 10 و 500
            'image' => $this->faker->imageUrl(640, 480, 'product', true), // صورة عشوائية
            'album' => json_encode([$this->faker->imageUrl(640, 480, 'product', true), $this->faker->imageUrl(640, 480, 'product', true)]), // ألبوم صور
            'video' => $this->faker->url, // رابط فيديو
            'slug' => $this->faker->slug, // رابط فريد
            'sub_category_id' => \App\Models\SubCategory::factory()->create()->id, // ربط بالقسم الفرعي
            'sub_category_id' => \App\Models\SubCategory::factory()->create()->id, // ربط بالقسم الفرعي
            'coupon_id' => \App\Models\Coupon::factory()->create()->id, // ربط بكوبون عشوائي
            'company_id' => Company::factory()->create()->id ,

        ];
    }
}
