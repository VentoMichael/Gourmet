<?php

namespace App\Http\Controllers;

use App\Models\Exposant;
use App\Models\PraticalInfos;
use App\Models\RandomImageOfGourmet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $exposantsFirstThree = Exposant::inRandomOrder()->limit(3)->where('accepted','1')->get();
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('dashboard',compact('exposantsFirstThree','praticalInformations','firstThreeRandomImages'));
    }
}
