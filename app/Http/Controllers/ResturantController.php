<?php

namespace App\Http\Controllers;

use App\Mail\ResturantMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'people' => 'required',
            'message' => 'required',
        ]);
    }

    public function contactSubmit(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Mail::to('amattar56@gmail.com')->send(new ResturantMail($data));
        return redirect(route('contact'))->with('success','We have received your message, we will try to respond to you as soon as possible');
    }

}
