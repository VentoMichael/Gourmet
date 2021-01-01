<?php

namespace Database\Seeders;

use App\Models\RandomImageOfGourmet;
use Database\Factories\RandomImageOfGourmetFactory;
use Illuminate\Database\Seeder;

class RandomImageOfGourmetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RandomImageOfGourmet::factory(10)->create();
    }
}
