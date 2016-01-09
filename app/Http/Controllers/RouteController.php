<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user_table;
class RouteController extends Controller
{
    public function home()
    {
        return view('pages.main');
    }
    
    public function gallery()
    {
        return view('pages.images');
    }
    
    public function reserve()
    {
        return view('pages.reservation-form');
    }
    
    public function admin()
    {
        return view('pages.admin-page');
    }
    
    public function edit()
    {
        return view('pages.edit-reservation');
    }
    
    public function manager()
    {
        return view('pages.manager');
    }
    
    public function profile($name)
    {   
       return view('pages.profile-page', ['user' => user_table::find($name)]);
        
        }
    
    public function receptionist()
    {
        return view('pages.receptionist');
    }
}
