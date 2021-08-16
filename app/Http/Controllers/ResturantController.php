<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResturantController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function menu(){
        return view('menu');
    }

    public function specials(){
        return view('specials');
    }

    public function events(){
        return view('events');
    }

    public function chefs(){
        return view('chefs');
    }

    public function gallery(){
        return view('gallery');
    }

    public function contact(){
        return view('contact');
    }

    public function bookTable(){
        return view('book-a-table');
    }

    public function bookTableSubmit(Request $request){
        dd($request->except('_token'));
    }

}
