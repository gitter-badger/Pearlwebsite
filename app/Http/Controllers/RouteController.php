<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
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
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        if(isset($_SESSION['type_id']) && $_SESSION['type_id'] == 3)
        {
            $user = $_SESSION;
            return view('pages.admin-page',$user);
        }else
        {
            return view('errors.404');
        }
    }
    
    public function edit()
    {
        return view('pages.edit-reservation');
    }
    
    public function manager()
    {
         if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        if(isset($_SESSION['type_id']) && $_SESSION['type_id'] == 2)
        {
            $user = $_SESSION;
            return view('pages.manager' , $user);
        }else
        {
            return redirect()->action("RouteController@home");
        }
        
    }
    
    public function profile()
    {
         if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
      
        if(isset($_SESSION['type_id']))
        {
            if($_SESSION['type_id'] == 1)
            {
                $user = $_SESSION;
                return view('pages.profile-page', $user);
            }else if($_SESSION['type_id'] == 2)
            {
                $user = $_SESSION;
                return view('pages.manager',$user);
            }else if($_SESSION['type_id'] == 3)
            {
                $user = $_SESSION;
                return view('pages.admin-page',$user);
            }else
            {
                $user = $_SESSION;
                return view('pages.receptionist',$user);
            }
        }else
        {
            
            return redirect()->action("RouteController@home");
        }
        
    }
    
    public function receptionist()
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        if(isset($_SESSION['type_id']) && $_SESSION['type_id'] == 4)
        {
            $user = $_SESSION;
            return view('pages.receptionist' , $user);
        }else
        {
            
            return redirect()->action("RouteController@home");
        }
        
    }
}
