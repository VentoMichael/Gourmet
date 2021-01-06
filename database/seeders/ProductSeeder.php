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
            'name'=> 'Vin',
            'icone'=> 'resources/svg/wine.svg',
            'alt'=> 'Picto représentant du vin'
        ]);
        Product::create([
            'id'=> 2,
            'name'=> 'Fromage',
            'icone'=> 'resources/svg/cheese.svg',
            'alt'=> 'Picto représentant du fromage'
        ]);
        Product::create([
            'id'=> 3,
            'name'=> 'Fruits',
            'icone'=> 'resources/svg/fruits.svg',
            'alt'=> 'Picto représentant des fruits'
        ]);
        Product::create([
            'id'=> 4,
            'name'=> 'Milk',
            'icone'=> 'resources/svg/bottle.svg',
            'alt'=> 'Picto représentant une bouteille de lait'
        ]);
        Product::create([
            'id'=> 5,
            'name'=> 'Confiserie',
            'icone'=> 'resources/svg/anise-candy.svg',
            'alt'=> 'Picto représentant des sucreries'
        ]);
        Product::create([
            'id'=> 6,
            'name'=> 'Poisson',
            'icone'=> 'resources/svg/fish.svg',
            'alt'=> 'Picto représentant du poisson'
        ]);
        Product::create([
            'id'=> 7,
            'name'=> 'Viande',
            'icone'=> 'resources/svg/meat.svg',
            'alt'=> 'Picto représentant de la viande'
        ]);
        Product::create([
            'id'=> 8,
            'name'=> 'Fleur',
            'icone'=> 'resources/svg/flower.svg',
            'alt'=> 'Picto représentant des fleurs'
        ]);
        Product::create([
            'id'=> 9,
            'name'=> 'Vêtement',
            'icone'=> 'resources/svg/tshirt.svg',
            'alt'=> 'Picto représentant un vêtement'
        ]);
    }
}
