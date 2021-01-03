<?php

namespace App\Http\Controllers;

use App\Models\PraticalInfos;
use App\Models\Sale;
use Illuminate\Http\Request;

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
        return back()->with('success', 'Votre demande va être traitée.
        Nous vous contacterons bientôt !');
    }
}
