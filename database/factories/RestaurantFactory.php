<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dish_section' => $this->faker->randomElement($array = array ('Plats','Sandwichs','Desserts')),
            'title_dish' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description_dish' => $this->faker->sentence($nbWords = 8, $variableNbWords = true),
            'price_dish' => $this->faker->numberBetween($min = 5, $max = 20),
        ];
    }
}
