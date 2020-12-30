<?php

namespace Database\Factories;

use App\Models\ExposantsTags;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExposantsTagsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExposantsTags::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tags_id'=>1,
            'exposants_id'=>1
        ];
    }
}
