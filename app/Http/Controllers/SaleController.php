<?php

namespace App\Http\Controllers;

use App\Mail\notificationSale;
use App\Mail\ticketSale;
use App\Models\PraticalInfos;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class SaleController extends Controller
{
    public function create()
    {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('tickets.create', compact('praticalInformations', 'firstThreeRandomImages'));
    }

    public function store(Request $request)
    {
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
        $sale->save();
        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new ticketSale());
        Mail::to(request('email'))
            ->send(new notificationSale());
        return Redirect::to(URL::previous() . "#form")->with('success', 'Merci ! Vous recevrez vos tickets via mail, dès que la validation sera faite.');
    }
}
