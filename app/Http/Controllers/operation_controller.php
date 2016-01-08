<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user_table;
class operation_controller extends Controller
{
    
    public function login(Request $request)
    {
        session()->push('m','$name');
        $name = $request->name;
        $password = $request->pass;
       
        
        $this->validate($request , [
    		'name'  => 'required',  
    		'pass'  => 'required'
    	]);
       /* $user_name=user_table::find($name);
        $pass=  user_table::find($password);*/
        $user=user_table::where('username',$name)->first();
        $name=$user['username'];
        $pass=$user['password'];
        $phone=$user['phone'];
        $email=$user['email'];
        if($pass == $password)
        {
           if(session_status() == PHP_SESSION_NONE)
           {
               session_start();
               $_SESSION['logged_state'] = 1;
               $_SESSION['username']= $name;
               $_SESSION['phone']= $phone;
               $_SESSION['email']= $email;
               
           }
            else 
             {
               $_SESSION['logged_state'] = 1;
               $_SESSION['username']=$name;
               $_SESSION['phone']=$phone;
               $_SESSION['email']=$email;
             }
            
            
           
        }
        else                 
        {
            return 0;
        }
            
    }
    /***********
    public function  search_user(Request $re)
    {
        $this->validate($request , [
         'name'  => 'required']);
       $user=user_table::where('username',$name)->first();
       return view('pages.admin.page.blade.php',  compact($user));
       
    }
   **************/
   
}
