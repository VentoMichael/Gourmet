<?php

namespace Database\Factories;

use App\Models\PraticalInfos;
use Illuminate\Database\Eloquent\Factories\Factory;

class PraticalInfosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PraticalInfos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'startDate' => '24 mars 2021',
            'endDate' => '25 mars 2021',
            'place' => $this->faker->streetAddress,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            'postalCode' => $this->faker->postcode,
            'region' => $this->faker->citySuffix ,
            'priceTicketVisitor'=>6,
            'phone' => $this->faker->e164PhoneNumber,
        ];
    }
}
