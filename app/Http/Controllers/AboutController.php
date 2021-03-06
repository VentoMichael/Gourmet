<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\PraticalInfos;


class AboutController extends Controller
{
    public function index(){
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $oneRandomImage = Gallery::inRandomOrder()->limit(1)->get();
        return view('about.index',compact('oneRandomImage','praticalInformations','firstThreeRandomImages'));
    }
}
