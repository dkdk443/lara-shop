<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->text(10),
            'detail' => $this->faker->text(30),
            'price' => 1000,
            'image_url' => 'aaa.png',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
