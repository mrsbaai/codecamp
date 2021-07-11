<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;


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

    public function facebookBasic(){
        return view('facebookBasic');
    }

    public function facebookAdvanced(){
        return view('facebookAdvanced');
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


    public function advanced(){
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/pdf/FACEBOOK_ADS_2021_ADVANCED_TRAINING.pdf";

        $headers = array(
                'Content-Type: application/pdf',
                );

        return Response::download($file, 'FACEBOOK_ADS_2021_ADVANCED_TRAINING.pdf', $headers);
    }
    public function basic(){
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/pdf/FACEBOOK_ADS_2021_BASIC_TRAINING.pdf";

        $headers = array(
                'Content-Type: application/pdf',
                );

        return Response::download($file, 'FACEBOOK_ADS_2021_BASIC_TRAINING.pdf', $headers);
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
    
    public function ShowHome(){
        return view('guest.home');
    }


    public function ShowJob(){
        return view('guest.job');
    }


    public function ShowEvents(){
        return view('guest.events');
    }


    public function ShowCoworking(){
        //return view('guest.coworking');
        return view('guest.coworking');
    }


    public function ShowNews(){
        return view('guest.news');
    }


    public function ShowContact(){
        return view('guest.contact');
    }

 


}
