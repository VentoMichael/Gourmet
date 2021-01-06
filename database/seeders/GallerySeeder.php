<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'id'=> 1,
            'image'=> 'image1.jpg',
            'alt'=> 'Représentation de plusieurs personnes regardant les aliments',
            'edition_id'=>1
        ]);
        Gallery::create([
            'id'=> 2,
            'image'=> 'image2.jpg',
            'alt'=> 'Représentation de plusieurs dixaines personnes regardant les aliments',
            'edition_id'=>1
        ]);
        Gallery::create([
            'id'=> 3,
            'image'=> 'image3.jpg',
            'alt'=> 'Représentation de plusieurs stands',
            'edition_id'=>1
        ]);
        Gallery::create([
            'id'=> 4,
            'image'=> 'image4.jpg',
            'alt'=> 'Représentation de plusieurs travailleurs sur leurs stand',
            'edition_id'=>1
        ]);
        Gallery::create([
            'id'=> 5,
            'image'=> 'image5.jpg',
            'alt'=> 'Représentation d\'un stand a fruit',
            'edition_id'=>1
        ]);
        Gallery::create([
            'id'=> 6,
            'image'=> 'image6.jpg',
            'alt'=> 'Représentation d\'une personne dans son stand',
            'edition_id'=>1
        ]);
        Gallery::create([
            'id'=> 7,
            'image'=> 'image7.jpg',
            'alt'=> 'Représentation d\'un marché',
            'edition_id'=>1
        ]);
    }
}

