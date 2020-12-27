<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\contact;


class pagesController extends Controller
{
    public function Home(){
        return view('underConstruction');
    }

    public function dev(){
        return view('dev');
    }

    public function coworking(){
        return view('coworking');
    }

    public function newyear(){
        return view('newyear');
    }

    public function event1(){
        return view('event1');
    }


    public function timer(){
        return view('timer');
    }






    public function saveForm(Request $request){
        $contact = new contact();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();
        return "OK";

    } 

    public function saveApp(Request $request){
        $contact = new contact();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->business = $request->get('business');
        $contact->save();
        return "OK";

    } 
}
