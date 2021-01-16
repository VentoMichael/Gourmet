<?php

namespace App\Http\Controllers;

use App\Mail\notificationForUser;
use App\Models\Contact;
use App\Models\PraticalInfos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{
    public function create() {
        $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
        $praticalInformations = PraticalInfos::all();
        return view('contact.create',compact('praticalInformations','firstThreeRandomImages'));
    }

    public function store(Request $request) {

        request()->validate([
            'name_surname'=> 'required',
            'email'=> 'required|email',
            'subject'=> 'required',
        ]);
        $message = new Contact();
        $message->name_surname = request('name_surname');
        $message->email = request('email');
        $message->subject = request('subject');
        $message->comment = request('comment');
        $message->save();
        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new \App\Mail\contact());
        Mail::to(request('email'))
            ->send(new notificationForUser());
        return Redirect::to(URL::previous() . "#createMsg")->with('success', 'Votre message a été envoyé avec succès.
        Nous vous contacterons bientôt !');
    }
}
