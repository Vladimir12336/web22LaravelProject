<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;


class MainController extends Controller
{
    public function login(){
        return view ('login');
    }

    public function registration(){
        return view ('registration');
    }

    public function homepage(){
        return view ('homepage');
    }

    public function about(){
        return view ('about');
    }

    public function form(){
        return view ('form');
    }

    public function form_check(Request $request){
        $valid = $request -> validate([
            'email' => 'required|min:5|max:100',
            'heading' => 'required|min:10|max:100',
            'message' => 'required|min:50|max:500',
        ]);

        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->heading = $request->input('heading');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('/form');
    }
}