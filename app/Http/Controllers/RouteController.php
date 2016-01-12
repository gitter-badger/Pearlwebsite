<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user_table;
use DB;

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
         if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        if (isset($_SESSION['lock']))
        {
        return view("pages.reservation-form");
            
        }else
        {
        
        return view('errors.404');
        }
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
    

   
    public function profile($username = null)
    {
        
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        if($username == null)
        {
            if(isset($_SESSION['type_id']))
            {
                if($_SESSION['type_id'] == 1)
                {
                    $user = $_SESSION;
                    $user['same_user'] = 1;
                    return view('pages.profile-page', $user);
                }else if($_SESSION['type_id'] == 2)
                {
                    $user = $_SESSION;
                    $user['same_user'] = 1;
                    return view('pages.manager',$user);
                }else if($_SESSION['type_id'] == 3)
                {
                    $user = $_SESSION;
                    $user['same_user'] = 1;
                    return view('pages.admin-page',$user);
                }else
                {
                    $user = $_SESSION;
                    $user['same_user'] = 1;
                    return view('pages.receptionist',$user);
                }
            }else
            {

                return redirect()->action("RouteController@home");
            }
        }else
        {
            $profile = DB::table('user_table')->where('username',$username)->first();
            if(isset($profile) && $profile->user_type_id == 1)
            {
                
                
                 $p = array(
                     'username' => $profile->username ,
                     'email' => $profile->email ,
                     'phone' => $profile->phone
                    );
                 if(isset($_SESSION['username']))
                 {
                    if($username == $_SESSION['username'])
                    {
                       $p['same_user'] = 1;
                    }
                 }
                return view('pages.profile-page', $p );
            }else
            {
                return view('errors.404');
            }
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
