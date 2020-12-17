<?php

namespace Database\Factories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sales::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_surname' => $this->faker->name,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'ticket' => $this->faker->numberBetween($min = 1, $max = 10),
            'total_price' => $this->faker->numberBetween($min = 6, $max = 600),
            'comment' => $this->faker->text($maxNbChars = 200),
            'edition_id' => 1,

        ];
    }
}
