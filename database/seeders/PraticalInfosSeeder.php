<?php

namespace Database\Seeders;

use App\Models\PraticalInfos;
use Illuminate\Database\Seeder;

class PraticalInfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PraticalInfos::factory(1)->create();
    }
}
