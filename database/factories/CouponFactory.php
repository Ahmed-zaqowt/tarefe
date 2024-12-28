<?php

namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    protected $model = \App\Models\Coupon::class;

    public function definition()
    {
        return [
            'code' => strtoupper(Str::random(8)), // كود عشوائي للكوبون
            'discount_percentage' => $this->faker->randomFloat(2, 5, 50), // نسبة خصم بين 5% و 50%
            'expiry_date' => $this->faker->dateTimeBetween('now', '+1 year'), // تاريخ انتهاء في خلال سنة
        ];
    }
}
