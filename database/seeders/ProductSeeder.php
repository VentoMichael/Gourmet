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
            'icone'=> 'http://gourmet.test/resources/svg/wine.svg',
            'alt'=> 'Picto représantant du vin'
        ]);
        Product::create([
            'id'=> 2,
            'name'=> 'cheese',
            'icone'=> 'http://gourmet.test/resources/svg/cheese.svg',
            'alt'=> 'Picto représantant du fromage'
        ]);
        Product::create([
            'id'=> 3,
            'name'=> 'fruits',
            'icone'=> 'http://gourmet.test/resources/svg/fruits.svg',
            'alt'=> 'Picto représantant des fruits'
        ]);
        Product::create([
            'id'=> 4,
            'name'=> 'milk',
            'icone'=> 'http://gourmet.test/resources/svg/bootle.svg',
            'alt'=> 'Picto représantant une bouteille de lait'
        ]);
    }
}
