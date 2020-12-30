<?php

namespace Database\Seeders;

use App\Models\Tags;
use App\Models\ExposantsTags;
use Illuminate\Database\Seeder;

class ExposantsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExposantsTags::factory()->count(10)->create();
    }
}
