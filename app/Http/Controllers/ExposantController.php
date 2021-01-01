<?php

namespace App\Http\Controllers;

use App\Models\Exposant;
use App\Models\PraticalInfos;
use App\Models\RandomImageOfGourmet;
use App\Models\Tag;
use Illuminate\Http\Request;

class ExposantController extends Controller
{

    public function become()
    {
        $randomImages = RandomImageOfGourmet::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('exposants.become',compact('randomImages','praticalInformations'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $randomImages = RandomImageOfGourmet::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $exposants = Exposant::with('tags')->get();
        return view('exposants.index',compact('randomImages','praticalInformations','exposants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exposant  $exposant
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Exposant $exposant)
    {
        return view('exposants.show');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exposant  $exposant
     * @return \Illuminate\Http\Response
     */
    public function edit(Exposant $exposant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exposant  $exposant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exposant $exposant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exposant  $exposant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exposant $exposant)
    {
        //
    }
}
