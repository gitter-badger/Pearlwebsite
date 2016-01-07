<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function home()
    {
        return view('main');
    }
    
    public function gallery()
    {
        return view('images');
    }
    
    public function reserve()
    {
        return view('reservation-form');
    }
}
