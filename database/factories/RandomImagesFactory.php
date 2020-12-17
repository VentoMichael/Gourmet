<?php

namespace Database\Factories;

use App\Models\RandomImages;
use Illuminate\Database\Eloquent\Factories\Factory;

class RandomImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RandomImages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl($width=640, $height=480, 'saloon', true, 'Faker'),
            'alt' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
        ];
    }
}
