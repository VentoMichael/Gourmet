<?php

namespace App\Http\Controllers;

use App\Models\PraticalInfos;
use App\Models\RandomImageOfGourmet;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $firstThreeRandomImages = RandomImageOfGourmet::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('contact.index',compact('praticalInformations','firstThreeRandomImages'));
    }
}
