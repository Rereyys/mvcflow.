<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(1000, 1000000),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
