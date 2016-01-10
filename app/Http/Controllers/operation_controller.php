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
        $type_id = $user['user_type_id'];
        if($pass == $password)
        {
           if(session_status() == PHP_SESSION_NONE)
           {
               session_start();
               
           }
            $_SESSION['logged_state'] = 1;
            $_SESSION['username']= $name;
            $_SESSION['phone']= $phone;
            $_SESSION['email']= $email;
            $_SESSION['type_id'] = $type_id;
            return 1;
        }
        else                 
        {
            return 0;
        }
        
    }
    
    public function  search_user(Request $re)
    {
        $this->validate($request , [
        'name'  => 'required']);
       $user=user_table::where('username',$name)->first();
       return view('pages.admin',  compact($user));
       
    }
    public function reserveation(Request $re)
    {
        $val1=$re->oneval;
        $val2=$re->twoval;
        $val3=$re->threeval;
        
        if($val1 == 0 && $val2== 0 && $val3 == 0)
        {   
            $this->throwValidationException($re ,0);
        }
        else 
        {
            //echo $val1;
            //return view('ProController@reserve');
          // return redirect()->action('ProController@reserve');
        }
        
    }
}
