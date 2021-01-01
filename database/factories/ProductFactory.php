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
            'name' => $this->faker->word(),
            'icone' => $this->faker->imageUrl(140, 95, 'cats'),
            'alt' => $this->faker->sentence($nbWords = 8, $variableNbWords = true),
        ];
    }
}
