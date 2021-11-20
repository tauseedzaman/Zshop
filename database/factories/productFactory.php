<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'weight' => random_int(20,200),
            'price' => random_int(100,2000),
            'stock' => random_int(5,20),
            'category_id' => random_int(1,4),
            'description' => $this->faker->paragraph(),
            'image' => 'storage/test/product-'.random_int(1,10).'.jpg',
            'thumbnail' => 'storage/test/product-'.random_int(1,10).'.jpg'
        ];
    }
}
