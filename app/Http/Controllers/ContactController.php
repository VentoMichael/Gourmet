<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\PraticalInfos;
use Illuminate\Http\Request;

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
            'email'=> 'required',
            'subject'=> 'required',
        ]);
        $message = new Contact();
        $message->name_surname = request('name_surname');
        $message->email = request('email');
        $message->subject = request('subject');
        $message->comment = request('comment');
        $message->save();
        return back()->with('success', 'Votre message a été envoyé avec succès.
        Nous vous contacterons bientôt !');
    }



    //public function create(){
    //    $firstThreeRandomImages = \App\Models\Gallery::inRandomOrder()->limit(3)->get();
    //    $praticalInformations = PraticalInfos::all();
    //    return view('contact.create',compact('praticalInformations','firstThreeRandomImages'));
    //}
//
    //public function store(Request $request)
    //{
    //    dd('ff');
    //    $message = new Contact(request()->validate([
    //        'name_surname' => 'required',
    //        'email' => 'required',
    //        'subject' => 'required',
    //    ]));
//
    //    $message->name_surname = request('name_surname');
    //    $message->email = request('email');
    //    $message->subject = request('subject');
    //    $message->comment = request('comment');
    //    $message->save();
    //    $email = $message->email;
    //    //Mail::to($email)->send(new BookCreated($message));
    //    return \redirect(route('/');
    //}
}
