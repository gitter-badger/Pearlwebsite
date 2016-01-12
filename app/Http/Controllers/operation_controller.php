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
     
        $op = new operationController();
       
       /* $request = (object)array(
            'single' => $re->oneval,
            'double' => $re->twoval,
            'tripple'=> $re->threeval,
            
            'dayin' => $re->rday,
            'monthin' => $re->rmonth,
            'dayout' =>  $re->cday,
            'monthout' => $re->cmonth,
        );*/
        $re->request->add([
            'single' => $re->oneval,
            'double' => $re->twoval,
            'tripple'=> $re->threeval,
            
            'dayin' => $re->rday,
            'monthin' => $re->rmonth,
            'dayout' =>  $re->cday,
            'monthout' => $re->cmonth,
        ]);
        
        $chechAv = $op->checkAvailability($re);
        
        if(!$chechAv)
        {
            $this->throwValidationException($re ,0);
        }   
        
        $val1=$re->oneval;
        $val2=$re->twoval;
        $val3=$re->threeval;
        $in_day=$re->rday;
        $in_mon=$re->rmonth;
        $out_day=$re->cday;
        $out_mon=$re->cmonth;
         global $in_key;
         global $out_in_key;
         global  $inwit;
         global $tot,$tot2,$tot3;
         global  $to,$to2,$to3;
         
         $this->validate($re, [
            
            'oneval' => 'numeric',
             'twoval' => 'numeric',
             'threeval' => 'numeric'
            
        ]);
          
        if($val1 == 0 && $val2== 0 && $val3 == 0 )
        {   
           
            $this->throwValidationException($re ,0);
        }
       
         
        else 
        {
             
           if(session_status() == PHP_SESSION_NONE)
           {
               session_start();
               
           }
            $month = array(
             1 => 'January',
             2 => 'February',
             3 => 'March',
             4 => 'April',
             5 => 'May',
             6 => 'June',
             7 => 'July',
             8 => 'Auguest',
             9 => 'September',
             10=> 'October',
             11=> 'November',
             12=> 'December'
         );
             $in_all=explode( ' ', $in_mon );
             $out_all=explode( ' ', $out_mon );
             $_SESSION['val1']=$val1;
             $_SESSION['val2']=$val2;
             $_SESSION['val3']=$val3;
             $inwit=abs($in_day-$out_day)-1;
            if($in_all[0] == $out_all[0] && $in_all[1]==$out_all[1] && $inwit < 0)
             {
                 $this->throwValidationException($re ,0);
             } 
            else if($in_all[0] == $out_all[0] && $in_all[1]==$out_all[1]){
                  
                   $_SESSION['inwit']=$inwit;
                     $to=$val1 * $inwit * 50;
                     $_SESSION['to']=$to;
                     $to2=$val2 * $inwit * 60;
                     $_SESSION['to2']=$to2;
                     $to3=$val3 * $inwit * 70;
                     $_SESSION['to3']=$to3;
                     
                    $all_to=$to + $to2 +$to3;
                      $_SESSION['all_to']=$all_to;
                        
                        
                        
                      $_SESSION['lock']='0';
                     
             }
             
              else
             {
                 
                 foreach ($month as $mo)
                 {
                     if($mo == $in_all[0] )
                     {
                         $in_key= key($month)-1;
                        
                     }
                 }
                   foreach ($month as $mo)
                 {
                     if($mo == $out_all[0] )
                     {
                      $out_in_key= key($month)-1;
                        
                     }
                 }
                 $mo=  abs($out_in_key - $in_key)*12;
                 $year=  abs($in_all[1]-$out_all[1]);
                 $day=abs($in_day-$out_day);
                 $all_days=($mo +$day)-1;
                  $_SESSION['all_days']=$all_days;
                 if($year >= 0 && $year <= 1)
                 {
                    
                        $tot=$val1 * $all_days * 50;
                        $_SESSION['tot']=$tot;
                       
                         $tot2=$val2 * $all_days * 60;
                         $_SESSION['tot2']=$tot2;
                         
                           $tot3=$val3 * $all_days * 70;
                           $_SESSION['tot3']=$to3;
                           
                      $all_tota=$tot+$tot2+$tot3;
                         $_SESSION['all_tot']=$all_tota;
                         $_SESSION['lock']=1;
                     /************Session***********/
                 
                      
                     
                     
                     
                     }
             }
            
            
          
        }
        
    }
    public function upph(Request $re )
    {
     $val1=$re->fo1;
     $val2=$re->fo2;
     $val3=$re->em1;
     $val4=$re->em2;
    
      $this->validate($re, [
            
            'fo1' => 'required | numeric',
          'fo2' => 'required | numeric |  same:fo1',
          'em1' => 'required  |email',
          'em2' => 'required  | email |same:em1',
           
        ]);
      if(session_status() == PHP_SESSION_NONE)
           {
               session_start();
               
           }
           $user_a= $_SESSION['username'];
      $user=  user_table::where('username',$user_a)->first();
      $user->phone=$re->fo1;
      $user->email=$re->em1;
      
      $user->save();
       echo 'updating is successfully happen ';
    }
    public function uppaw(Request $re)
    {
         $val5=$re->nepas;
        $val6=$re->copas;
            $this->validate($re, [
            'nepas' =>'required ',
             'copas'=> 'required | same:nepas',
        ]);
          if(session_status() == PHP_SESSION_NONE)
           {
               session_start();
               
           }
           $user_a= $_SESSION['username'];
            $user=  user_table::where('username',$user_a)->first();
            $user->password=$re->nepas;
            $user->save();
            echo 'updating is successfully happen ';
    }
    public function addone(Request $re)
    {
         $val5=$re->sw;
        $val6=$re->num;
         $this->validate($re, [
            'num' =>'required |numeric ',
             
        ]);
         
         $ud=array($val5 ,$val6);
        return $ud;
        
    }
     public function delone(Request $re)
    {
         $val5=$re->fw;
        $val6=$re->nums;
         $this->validate($re, [
            'nums' =>'required |numeric ',
             
        ]);
         
         $ud=array($val5 ,$val6);
        return $ud;
        
    }
}
