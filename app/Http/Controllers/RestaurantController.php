<?php

namespace App\Http\Controllers;

use App\Models\PraticalInfos;
use App\Models\RandomImageOfGourmet;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $restaurant = Restaurant::all();
        return view('restaurant.index',compact('praticalInformations','firstThreeRandomImages','restaurant'));
    }
}
