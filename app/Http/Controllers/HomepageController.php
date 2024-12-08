<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function portfolio(){
        return view('portfolio');
    }
}
