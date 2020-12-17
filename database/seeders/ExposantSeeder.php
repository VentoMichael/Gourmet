<?php

namespace Database\Seeders;

use App\Models\Exposants;
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
        Exposants::factory()->count(10)->create();
    }
}
