<?php

namespace Database\Factories;

use App\Models\Editions;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class EditionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Editions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => ($this->faker->dateTimeBetween($startDate = 'now', $endDate = Carbon::now()->addYears(10), $timezone = null))->format('Y'),
        ];
    }
}
