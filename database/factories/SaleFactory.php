<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

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
            'ticketCount' => $this->faker->numberBetween($min = 1, $max = 10),
            'ticketPrice' => $this->faker->numberBetween($min = 6, $max = 600),
            'total_ticket_price' => $this->faker->numberBetween($min = 6, $max = 600),
            'comment' => $this->faker->text($maxNbChars = 200),
        ];
    }
}
