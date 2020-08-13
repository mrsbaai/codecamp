<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\contact;


class pagesController extends Controller
{
    public function Home(){
        return view('underConstruction');
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
}
