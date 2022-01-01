<?php

namespace Database\Factories;

use App\Models\ad;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    protected $model = ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(11, 83),
            'title' => $this->faker->title,
            'description' => $this->faker->text(200),
            'image_url' => public_path('images/default/ads_image.png'),
            'price' => rand(100000, 100000000),
            'address' => $this->faker->Address(),
            'phone_number_ads' => $this->faker->phoneNumber,
        ];
    }
}
