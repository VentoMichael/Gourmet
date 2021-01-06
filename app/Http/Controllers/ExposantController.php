<?php

namespace App\Http\Controllers;

use App\Mail\newExposant;
use App\Mail\notificationExposant;
use App\Models\Country;
use App\Models\Exposant;
use App\Models\ExposantTag;
use App\Models\PraticalInfos;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Schema\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ExposantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $exposants = Exposant::with('tags', 'product')->where('accepted', '1')->get();
        $rq = \request()->query();
        return view('exposants.index', compact('firstThreeRandomImages', 'praticalInformations', 'exposants','rq'));
    }

    public function show(Exposant $exposant)
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('exposants.show', compact('firstThreeRandomImages', 'praticalInformations', 'exposant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $countries = Country::all();
        $tags = Tag::all();
        $products = Product::all();

        return view('exposants.create',
            compact('firstThreeRandomImages', 'praticalInformations', 'tags', 'countries', 'products'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'shop_name' => 'required|unique:exposants',
            'phone' => 'required|unique:exposants',
            'email' => 'required|email|unique:exposants',
            'website' => 'required',
            'location' => 'required',
            'country' => 'required',
            'proposed_product' => 'required',
            'productBio' => 'required',
            'product_description' => 'required',
        ]);
        $exposant = new Exposant();
        $tag = new ExposantTag();
        $exposant->shop_name = request('shop_name');
        $exposant->phone = request('phone');
        $exposant->email = request('email');
        $exposant->website = request('website');
        $exposant->location = request('location');
        $exposant->country_id = request('country');
        $exposant->product_id = request('proposed_product');
        $exposant->participate_other_exhibition_belgium = request('participate_other_exhibition_belgium');
        $exposant->bio_product = request('productBio');
        $exposant->product_description = request('product_description');
        $exposant->comment_for_organizer = request('commentsOrganizers');
        $tag->tag_id = request('tags');
        $exposant->save();
        $exposant->tags()->attach($tag->tag_id);
        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new newExposant());
        Mail::to(request('email'))
            ->send(new notificationExposant());
        //if ($exposant->accepted->update() === true) {
        //    Mail::to(request('email'))
        //        ->send(new notificationExposant());
        //}
        return Redirect::to(URL::previous()."#form")->with('success', 'Votre demande va être traitée.
Nous vous contacterons bientôt !');
    }
}
