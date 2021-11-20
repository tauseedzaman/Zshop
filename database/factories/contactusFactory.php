<?php

namespace Database\Factories;

use App\Models\contactus;
use Illuminate\Database\Eloquent\Factories\Factory;

class contactusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = contactus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'subject' => $this->faker->sentence(2),
            'message' => $this->faker->paragraph(2),
        ];
    }
}
