<?php

namespace Database\Seeders;

use App\Models\Exposant;
use Illuminate\Database\Seeder;

class ExposantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exposant::factory()->count(30)->create();
    }
}
