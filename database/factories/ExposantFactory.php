<?php

namespace Database\Factories;

use App\Models\Exposant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExposantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exposant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_name' => $this->faker->firstName,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            'country'=>$this->faker->country,
            'postal_code' => $this->faker->postcode,
            'participate_other_exhibition_belgium'=> $this->faker->boolean($chanceOfGettingTrue = 50),
            'bio_product'=> $this->faker->boolean($chanceOfGettingTrue = 50),
            'product_description'=> $this->faker->text($maxNbChars = 256),
            'comment_for_organizer'=> $this->faker->text($maxNbChars = 256),
        ];
    }
}
