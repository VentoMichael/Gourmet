<?php

namespace App\Http\Controllers;

use App\Models\PraticalInfos;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $restaurant = Restaurant::orderBy('order')->get()->groupBy('dish_section');
        $oldRestaurant = ['dish_section' => '', 'title_dish' => '', 'description_dish' => ''];
        $i = 0;

        return view('restaurant.index',
            compact('praticalInformations', 'firstThreeRandomImages', 'restaurant', 'oldRestaurant', 'i'));
    }
}
