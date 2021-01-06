<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'id'=> 1,
            'name'=> 'Allemagne',
        ]);
        Country::create([
            'id'=> 2,
            'name'=> 'Italie',
        ]);
        Country::create([
            'id'=> 3,
            'name'=> 'France',
        ]);
        Country::create([
            'id'=> 4,
            'name'=> 'Pays-bas',
        ]);
        Country::create([
            'id'=> 5,
            'name'=> 'Suisse',
        ]);
        Country::create([
            'id'=> 6,
            'name'=> 'Belgique',
        ]);
        Country::create([
            'id'=> 7,
            'name'=> 'Espagne',
        ]);
    }
}
