<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{


    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->word(),
            'name' => $this->faker->word(),
            'year' => $this->faker->word(),
            'price' => $this->faker->word(),
            'kind' => $this->faker->word(),
            'style' => $this->faker->word(),
            'image' => $this->faker->imageUrl(320, 240, 'cats'),
            'user_id' => 3,
        ];
    }
}
