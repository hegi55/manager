<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Auth;

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
     * @return \Illuminate\Http\Response
     */


    //Homepage 
    public function index()
    {

        $data = array();
        return View::make('home', $data);            
    }
}
