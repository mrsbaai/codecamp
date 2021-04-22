<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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

 

    public function ShowAdminEditGuests(){
        return view('admin.editGuests');
    }

    public function ShowAdminEditEpisodes(){
        return view('admin.editEpisodes');
    }

    public function ShowAdminEditEvents(){
        return view('admin.editEvents');
    }

    public function ShowAAdminEditNews(){
        return view('admin.editNews');
    }

    public function ShowAdminEditCoworkers(){
        return view('admin.editCoworkers');
    }

    public function ShowAdminEventSubscribers(){
        return view('admin.eventSubscribers');
    }

    public function ShowAdminCoworkingRequests(){
        return view('admin.coworkingRequests');
    }

    public function ShowAdminEventRequests(){
        return view('admin.eventRequests');
    }


   




}
