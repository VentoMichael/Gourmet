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
            'alt'=> 'Picto représentant du vin'
        ]);
        Product::create([
            'id'=> 2,
            'name'=> 'cheese',
            'icone'=> 'resources/svg/cheese.svg',
            'alt'=> 'Picto représentant du fromage'
        ]);
        Product::create([
            'id'=> 3,
            'name'=> 'fruits',
            'icone'=> 'resources/svg/fruits.svg',
            'alt'=> 'Picto représentant des fruits'
        ]);
        Product::create([
            'id'=> 4,
            'name'=> 'milk',
            'icone'=> 'resources/svg/bottle.svg',
            'alt'=> 'Picto représentant une bouteille de lait'
        ]);
        Product::create([
            'id'=> 5,
            'name'=> 'candy',
            'icone'=> 'resources/svg/anise-candy.svg',
            'alt'=> 'Picto représentant des sucreries'
        ]);
        Product::create([
            'id'=> 6,
            'name'=> 'fish',
            'icone'=> 'resources/svg/fish.svg',
            'alt'=> 'Picto représentant du poisson'
        ]);
        Product::create([
            'id'=> 7,
            'name'=> 'meat',
            'icone'=> 'resources/svg/meat.svg',
            'alt'=> 'Picto représentant de la viande'
        ]);
        Product::create([
            'id'=> 8,
            'name'=> 'flower',
            'icone'=> 'resources/svg/flower.svg',
            'alt'=> 'Picto représentant des fleurs'
        ]);
        Product::create([
            'id'=> 9,
            'name'=> 'clothe',
            'icone'=> 'resources/svg/tshirt.svg',
            'alt'=> 'Picto représentant un vêtement'
        ]);
    }
}
