<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.home');
    }

    public function ShowCam(){
        return view('dashboard.cam');
    }


    public function ShowEpisodes(){
        return view('dashboard.episodes');
    }

    public function ShowMessages(){
        return view('dashboard.messages');
    }

    public function ShowUserEvents(){
        return view('dashboard.events');
    }

    public function ShowPorfolio(){
        return view('dashboard.porfolio');
    }

    public function ShowUserCoworking(){
        return view('dashboard.coworking');
    }

    public function ShowRegisterCoworking(){
        return view('dashboard.register');
    }

    public function ShowCoworkers(){
        return view('dashboard.coworkers');
    }

    public function ShowPersonal(){
        return view('dashboard.personal');
    }

    public function ShowPassword(){
        return view('dashboard.password');
    }

    public function ShowUserNews(){
        return view('dashboard.news');
    }

    public function ShowSupport(){
        return view('dashboard.support');
    }






}
