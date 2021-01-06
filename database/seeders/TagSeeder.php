<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'id'=> 1,
            'name'=> 'Végétarien',
            'slug'=> 'vegetarien',
        ]);
        Tag::create([
            'id'=> 2,
            'name'=> 'Gourmandise',
            'slug'=> 'gourmandise',
        ]);
        Tag::create([
            'id'=> 3,
            'name'=> 'Sans gluten',
            'slug'=> 'sansgluten',
        ]);
        Tag::create([
            'id'=> 5,
            'name'=> 'Repas équilibrer',
            'slug'=> 'repasequilibrer',
        ]);
        Tag::create([
            'id'=> 7,
            'name'=> 'Alimentation saine',
            'slug'=> 'alimentationsaine',
        ]);
        Tag::create([
            'id'=> 6,
            'name'=> 'Manger bio',
            'slug'=> 'mangerbio',
        ]);
        Tag::create([
            'id'=> 8,
            'name'=> 'Fait maison',
            'slug'=> 'faitmaison',
        ]);
        Tag::create([
            'id'=> 4,
            'name'=> 'Italien',
            'slug'=> 'italien',
        ]);
        Tag::create([
            'id'=> 9,
            'name'=> 'Féculent',
            'slug'=> 'feculent',
        ]);
        Tag::create([
            'id'=> 10,
            'name'=> 'Sucré',
            'slug'=> 'sucre',
        ]);;
        Tag::create([
            'id'=> 11,
            'name'=> 'Salé',
            'slug'=> 'sale',
        ]);
    }
}
