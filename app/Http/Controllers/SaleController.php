<?php

namespace App\Http\Controllers;

use App\Mail\notificationSale;
use App\Mail\ticketSale;
use App\Models\PraticalInfos;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class SaleController extends Controller
{
    public function create()
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('tickets.create', compact('praticalInformations', 'firstThreeRandomImages'));
    }

    public function store()
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        $ticketPrice = PraticalInfos::first()->priceTicketVisitor;
        request()->validate([
            'name_surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'ticketCount' => 'required',
        ]);
        $sale = new Sale();
        $sale->name_surname = request('name_surname');
        $sale->phone = request('phone');
        $sale->email = request('email');
        $sale->ticketCount = request('ticketCount');
        $sale->comment = request('comment');
        $sale->total_ticket_price = $sale->ticketCount * $ticketPrice;
        \Stripe\Stripe::setApiKey(env('SECRET_API_STRIPE'));
        $amount = 6 * request('ticketCount');
        $amount *= 100;
        $amount = (int) $amount;
        $payment_intent = \Stripe\PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'EUR',
            'description' => 'Participation au marché des gourmets',
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;
        $sale->save();
        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new ticketSale());
        Mail::to(request('email'))
            ->send(new notificationSale());
        Session::flash('success', 'Merci ! Votre enregistrement à été effectuer avec succés.');
        return view('checkout.checkoutVisitor',
            compact('intent', 'amount', 'firstThreeRandomImages', 'praticalInformations'));
    }

    public function afterPayment()
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('tickets.create',
            compact('firstThreeRandomImages', 'praticalInformations'));
    }
}
