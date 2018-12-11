<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
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
     * @return \Illuminate\Http\Response
     */
    public function dashboardPage(){
        return view('dashboard');
    } 
     public function adminPage(){
        return view('pages.admin');
    }
    public function statisticPage(){
        return view('pages.statistic');
    }
    public function hourMapPage(){
        return view('pages.hourmap');
    }
    public function weekMapPage(){
        return view('pages.weekmap');
    }
 
}
