<?php

namespace Database\Seeders;

use App\Models\Edition;
use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Edition::create([
            'id'=> 1,
            'year'=> 2020,
            'gallery_id'=> '1'
        ]);
        Edition::create([
            'id'=> 2,
            'year'=> 2021,
            'gallery_id'=> 1
        ]);
        Edition::create([
            'id'=> 3,
            'year'=> 2022,
            'gallery_id'=> 1
        ]);
        Edition::create([
            'id'=> 4,
            'year'=> 2023,
            'gallery_id'=> 1
        ]);
    }
}
