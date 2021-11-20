<?php

namespace Database\Factories;

use App\Models\faq;
use Illuminate\Database\Eloquent\Factories\Factory;

class faqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = faq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question' => $this->faker->sentence(15)." ? ",
            'answer' => $this->faker->sentence(40),
        ];
    }
}
