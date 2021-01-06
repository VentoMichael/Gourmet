<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'id' => 1,
            'dish_section'=> 'Plats principaux',
            'order'=> '1',
            'title_dish'=> 'Homard',
            'description_dish'=> 'Odit omnis ipsa quo consequatur autem in totam totam qui iure.',
            'price_dish'=> 12
        ]);
        Restaurant::create([
            'id' => 2,
            'dish_section'=> 'Plats principaux',
            'order'=> '1',
            'title_dish'=> 'Blanquette de veau facile',
            'description_dish'=> 'Dans un bol, bien mélanger la crème fraîche, le jaune d’oeuf et le jus de citron. Ajouter ce mélange au dernier moment, bien remuer et servir tout de suite.',
            'price_dish'=> 20
        ]);
        Restaurant::create([
            'id' => 3,
            'dish_section'=> 'Plats principaux',
            'order'=> '1',
            'title_dish'=> 'Lasagnes à la bolognaise',
            'description_dish'=> 'Faire revenir gousses hachées dail et les oignons émincés dans un peu dhuile dolive.',
            'price_dish'=> 23
        ]);
        Restaurant::create([
            'id' => 4,
            'dish_section'=> 'Desserts',
            'order'=> '3',
            'title_dish'=> 'Tiramisu',
            'description_dish'=> 'Odit omnis ipsa quo consequatur autem in totam totam qui iure.',
            'price_dish'=> 12
        ]);
        Restaurant::create([
            'id' => 5,
            'dish_section'=> 'Desserts',
            'order'=> '3',
            'title_dish'=> 'Ramequins fondants',
            'description_dish'=> 'Dans un bol, bien mélanger la crème fraîche, le jaune d’oeuf et le jus de citron. Ajouter ce mélange au dernier moment, bien remuer et servir tout de suite.',
            'price_dish'=> 20
        ]);
        Restaurant::create([
            'id' => 6,
            'dish_section'=> 'Desserts',
            'order'=> '3',
            'title_dish'=> 'Meringue',
            'description_dish'=> 'Faire revenir gousses hachées dail et les oignons émincés dans un peu dhuile dolive.',
            'price_dish'=> 23
        ]);
        Restaurant::create([
            'id' => 7,
            'dish_section'=> 'Sandwhichs',
            'order'=> '2',
            'title_dish'=> 'Bánh mì',
            'description_dish'=> 'Servi dans une petite baguette, complétée habituellement de viande, mais il peut contenir une large variété de nourriture : poisson, fromage, carottes râpées ou des œufs (piment rouge facultatif)',
            'price_dish'=> 12
        ]);
        Restaurant::create([
            'id' => 8,
            'dish_section'=> 'Sandwhichs',
            'order'=> '2',
            'title_dish'=> 'Bacon',
            'description_dish'=> 'Souvent servi avec du ketchup ou une sauce brune.',
            'price_dish'=> 20
        ]);
        Restaurant::create([
            'id' => 9,
            'dish_section'=> 'Sandwhichs',
            'order'=> '2',
            'title_dish'=> 'Sandwich barros luco',
            'description_dish'=> 'Bœuf (habituellement du steak finement coupé) et fromage.',
            'price_dish'=> 23
        ]);
    }
}
