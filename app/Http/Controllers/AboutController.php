<?php

namespace App\Http\Controllers;

use App\Models\PraticalInfos;
use App\Models\RandomImageOfGourmet;

class AboutController extends Controller
{
    public function index(){
        $firstThreeRandomImages = RandomImageOfGourmet::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('about.index',compact('praticalInformations','firstThreeRandomImages'));
    }
}
