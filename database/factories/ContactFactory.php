<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_surname' => $this->faker->name,
            'email' => $this->faker->email,
            'subject' => $this->faker->word,
            'comment' => $this->faker->text($maxNbChars = 200),
            'edition_id' => 1
        ];
    }
}
