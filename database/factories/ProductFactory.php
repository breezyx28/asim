<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1000, 200000),
            'description' => $this->faker->text(50),
            'brand' => $this->faker->company(),
            'image' => $this->faker->image('public\Storage\Products', 640, 480, 'phones', true, true, 'Phone'),
            'category_id' => $this->faker->randomElement(Category::pluck('id')->all()),
        ];
    }
}
