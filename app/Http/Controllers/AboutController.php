<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about.index');
    }
}
