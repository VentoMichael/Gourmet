<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExposantController extends Controller
{
    public function index(){
        return view('exposants.index');
    }
    public function become(){
        return view('exposants.become');
    }
    public function show(){
        return view('exposants.show');
    }
}
