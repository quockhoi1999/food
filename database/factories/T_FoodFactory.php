<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class T_FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return[
            'description' => $this->faker->word(),
            'name'=> $this->faker->name(),
            'model'=>$this->faker->name(),
            'unit_price' => $this->faker->randomNumber(),
            'promotion_price' => $this->faker->randomNumber(),
            'produced_on' => $this->faker->date('Y-m-d'),
            'image' => rand(1,6).'.jpg',
        ];
    }
}
