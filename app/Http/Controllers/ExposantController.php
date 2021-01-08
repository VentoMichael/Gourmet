<?php

namespace App\Http\Controllers;

use App\Mail\newExposant;
use App\Mail\notificationForExposant;
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
use Illuminate\Support\Facades\Session;
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
        $rq = \request()->query();
        return view('exposants.index', compact('firstThreeRandomImages', 'praticalInformations', 'rq'));
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
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $countries = Country::all();
        $tags = Tag::all();
        $products = Product::all();
        request()->validate([
            'shop_name' => 'required|unique:exposants',
            'phone' => 'required|unique:exposants|max:10',
            'email' => 'required|email|unique:exposants',
            'website' => 'required',
            'location' => 'required',
            'country' => 'required',
            'proposed_product' => 'required',
            'product_description' => 'required',
        ], [
            'shop_name.required' => 'Le nom du commerce est requis',
            'shop_name.unique' => 'Ce nom du commerce est déjà pris',
            'phone.unique' => 'Ce numéro de téléphone est déjà pris',
            'phone.required' => 'Le numéro de téléphone est requis',
            'phone.max' => 'Le numéro de téléphone n\'est pas valide',
            'email.required' => 'L\'email est requis',
            'email.email' => 'L\'email ci-dessus est inhabituel',
            'email.unique' => 'Cet email ci-dessus est déjà pris',
            'website.required' => 'Le site internet est requis',
            'location.required' => 'L\'adresse est requis',
            'proposed_product.required' => 'Le produit proposé est requis',
            'product_description.required' => 'Le descriptif est requis',
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
        $exposant->participate_other_exhibition_belgium = request('participateSaloon');
        $exposant->product_description = request('product_description');
        $exposant->comment_for_organizer = request('commentsOrganizers');
        $tag->tag_id = request('tags');

        //if ($exposant->accepted === true) {
        //    Mail::to($exposant->email)
        //        ->send(new notificationForExposant());
        //}
        \Stripe\Stripe::setApiKey(env('SECRET_API_STRIPE'));

        $amount = 255;
        $amount *= 100;
        $amount = (int) $amount;
        $payment_intent = \Stripe\PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'EUR',
            'description' => 'Paiement pour devenir exposant',
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;
        //if ($intent === true){
            $exposant->save();
            $exposant->tags()->attach($tag->tag_id);
            Mail::to(env('MAIL_FROM_ADDRESS'))
                ->send(new newExposant());
            Mail::to(request('email'))
                ->send(new notificationForExposant());
        //}


        return view('checkout.checkout', compact('intent', 'amount','firstThreeRandomImages', 'praticalInformations', 'countries', 'tags', 'products'));
    }

    public function afterPayment()
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $countries = Country::all();
        $tags = Tag::all();
        $products = Product::all();
        Session::flash('success', 'Votre demande va être traitée. Nous vous contacterons bientôt !');
        return view('exposants.create',
            compact('firstThreeRandomImages', 'praticalInformations', 'countries', 'tags', 'products'));
    }
}
