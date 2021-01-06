<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\PraticalInfos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request){
        $firstThreeRandomImages = Gallery::inRandomOrder()->limit(3)->get();
        $randomImages = Gallery::all();
        $praticalInformations = PraticalInfos::all();
        return view('gallery.index',compact('praticalInformations','firstThreeRandomImages','randomImages'));
    }
}
