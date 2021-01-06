<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id'=> 1,
            'name'=> 'wine',
            'icone'=> 'resources/svg/wine.svg',
            'alt'=> 'Picto représantant du vin'
        ]);
        Product::create([
            'id'=> 2,
            'name'=> 'cheese',
            'icone'=> 'resources/svg/cheese.svg',
            'alt'=> 'Picto représantant du fromage'
        ]);
        Product::create([
            'id'=> 3,
            'name'=> 'fruits',
            'icone'=> 'resources/svg/fruits.svg',
            'alt'=> 'Picto représantant des fruits'
        ]);
        Product::create([
            'id'=> 4,
            'name'=> 'milk',
            'icone'=> 'resources/svg/bottle.svg',
            'alt'=> 'Picto représantant une bouteille de lait'
        ]);
    }
}
