<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DigitalProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_type_id'=>$this->faker->numberBetween(1,4),
            'name' => $this->faker->word(),
            'price' => $this->faker->randomDigit(),
            'description'=>$this->faker->sentence(),
            'discount' => $this->faker->randomDigit(),
        ];
    }
}
