<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Auth;

class GuestController extends Controller
{
    //Homepage 
    public function index()
    {
        $data = array();
        return View::make('homeGuest', $data);
    }
}
