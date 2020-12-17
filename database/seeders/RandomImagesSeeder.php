<?php

namespace Database\Seeders;

use App\Models\RandomImages;
use Illuminate\Database\Seeder;

class RandomImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RandomImages::factory(10)->create();
    }
}
