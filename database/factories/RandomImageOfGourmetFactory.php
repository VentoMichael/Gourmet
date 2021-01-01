<?php

namespace Database\Factories;

use App\Models\RandomImageOfGourmet;
use Illuminate\Database\Eloquent\Factories\Factory;

class RandomImageOfGourmetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RandomImageOfGourmet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(140, 95, 'cats'),
            'alt' => $this->faker->sentence()
        ];
    }
}
