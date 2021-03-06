<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\contact;
use App\app;


class PagesController extends Controller
{
    public function Home(){
        return view('underConstruction');
    }

    public function homeTest(){
        return view('dashboard.home');
    }

    public function dev(){
        return view('dev');
    }

    public function coworking1(){
        return view('coworking1');
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


    public function newyearData(){
        return view('data');
    }

    public function test(){
        return view('test');
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
        $app = new app();
        $app->name = $request->get('name');
        $app->email = $request->get('email');
        $app->phone = $request->get('phone');
        $app->business = $request->get('business');
        $app->save();
        return "OK";

    } 



    
    /* Guest */
    
    public function ShowMain(){
        return view('guest.main');
    }


    public function ShowJob(){
        return view('guest.job');
    }

    public function ShowEpisodes(){
        return view('guest.episodes');
    }


    public function ShowEvents(){
        return view('guest.events');
    }


    public function ShowCoworking(){
        return view('guest.coworking');
    }


    public function ShowBlog(){
        return view('guest.blog');
    }


    public function ShowContact(){
        return view('guest.contact');
    }





}
