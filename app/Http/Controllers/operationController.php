<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user_table;
use DB;
use Session;
use App\ourclass\formaction;

class operationController extends Controller
{
    public function signup(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $gender = $request->gender;
        $day = $request->day;
        $month = $request->month;
        $year = $request->year;
        $phone = $request->phone;
        $password = $request->password;
        $confpass = $request->confirmpassword;
        
        $this->validate($request, [
            'username' => 'required | unique:user_table',
            'email' => 'required | email | unique:user_table',
            'gender' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'phone' => 'required | numeric',
            'password' => 'required',
            'confirmpassword' => 'required | same:password',
        ]);
        $userType = 1;
        $birthday = "$year-$month-$day";
        //$request->request->add(['user_type_id' => $userType]);
        //inserting in database
        //$result = user_table::create($request->all());
       
        $result = DB::table('user_table')->insert([
            'username' => $username,
            'birthday' => $birthday,
            'gender'   => $gender,
            'email'    => $email,
            'password' => $password,
            'phone'    => $phone,
            'user_type_id' => $userType
        ]);
        
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        $_SESSION['logged_state'] = 1;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['type_id'] = $userType;
        
    }
    
    public function logout()
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();   
        }
        unset($_SESSION['logged_state']);
        unset($_SESSION['username']);
        unset($_SESSION['phone']);
        unset($_SESSION['email']);
        unset($_SESSION['type_id']);
    }
     
    public function checkAvailability(Request $request)
    {
        // same operation for each room type
        // get all empty rooms  -- 1
        // get all rooms that will checkout before my chech in date -- 2
        // add 1 and 2 -- 2.5
        // get all check in between the range of my in and out dates -- 3
        // get all who chech in and end after my check in date -- 4 not sure will not do
        // get all who will checkin between today and my checkin
        // 2.5 - (3 + 4)
        $single_room = -1;
        $double_room = -1;
        $triple_room = -1;
        
        $form = new formaction();
        $checkin = $form->make_date($request->dayin, $request->monthin);
        $checkout = $form->make_date($request->dayout, $request->monthout);
        $today = date("Y-m-d");
        $form->change_room_status();
        if($request->single > 0)
        {
            // getting all empty rooms
            $sroom = DB::table('table_rooms')->where('room_type_id', 1)->where('room_state',1)->get();
            // getting all who will checkout between today and my checkin
            $unsroom = DB::table('reservation_table')->whereBetween("checkout",array("$today" , "$checkin") )->get();
            // add 1 and 2 which is empty rooms and rooms that will checkout before my checkin
            $totalEmpty = sizeof($sroom) + $form->get_room(1, $unsroom);
            // getting checkin between my checkin and checkout
            //$broom = DB::table('reservation_table')->where('checkin','>',"$checkin",'and','checkin','<=',"$checkout")->get();
            $broom = DB::select(DB::raw("select * from reservation_table where checkin > '$checkin' and checkin <= '$checkout' "));
            $btw_io = $form->get_room(1, $broom);
            //echo $btw_io;
            //getting all who will checkin between today and my checkin
            $btwroom = DB::table('reservation_table')->whereBetween("checkin", array("$today" , "$checkin") )->get();
            $btwroom_s = $form->get_room(1, $btwroom);
            //echo $btwroom_s;
            // calculate total empty rooms
             //$room = $totalEmpty - ($btw_io + $btwroom_s);
             $single_room = $totalEmpty - ($btw_io + $btwroom_s);
             //echo $single_room;
             //echo $room;
        }else{
            $single_room = -2;
        }
        
        if ($request->double > 0) 
        {
            // getting all empty rooms
            $sroom = DB::table('table_rooms')->where('room_type_id', 2)->where('room_state',1)->get();
            // getting all who will checkout between today and my checkin
            $unsroom = DB::table('reservation_table')->whereBetween("checkout",array("$today" , "$checkin") )->get();
            // add 1 and 2 which is empty rooms and rooms that will checkout before my checkin
            $totalEmpty = sizeof($sroom) + $form->get_room(2, $unsroom);
            // getting checkin between my checkin and checkout
            $broom = DB::select(DB::raw("select * from reservation_table where checkin > '$checkin' and checkin <= '$checkout' "));
            $btw_io = $form->get_room(2, $broom);
           // echo $btw_io;
            //getting all who will checkin between today and my checkin
            $btwroom = DB::table('reservation_table')->whereBetween("checkin", array("$today" , "$checkin") )->get();
            $btwroom_s = $form->get_room(2, $btwroom);
            //echo $btwroom_s;
            // calculate total empty rooms
             //$room = $totalEmpty - ($btw_io + $btwroom_s);
             $double_room = $totalEmpty - ($btw_io + $btwroom_s);
             //echo $double_room;
             //echo $room;
        }  else {
            $double_room = -2;
        }
        
        if($request->tripple > 0)
        {
             // getting all empty rooms
            $sroom = DB::table('table_rooms')->where('room_type_id', 3)->where('room_state',1)->get();
            // getting all who will checkout between today and my checkin
            $unsroom = DB::table('reservation_table')->whereBetween("checkout",array("$today" , "$checkin") )->get();
            // add 1 and 2 which is empty rooms and rooms that will checkout before my checkin
            $totalEmpty = sizeof($sroom) + $form->get_room(3, $unsroom);
            // getting checkin between my checkin and checkout
            $broom = DB::select(DB::raw("select * from reservation_table where checkin > '$checkin' and checkin <= '$checkout' "));
            $btw_io = $form->get_room(3, $broom);
           // echo $btw_io;
            //getting all who will checkin between today and my checkin
            $btwroom = DB::table('reservation_table')->whereBetween("checkin", array("$today" , "$checkin") )->get();
            $btwroom_s = $form->get_room(3, $btwroom);
            //echo $btwroom_s;
            // calculate total empty rooms
             //$room = $totalEmpty - ($btw_io + $btwroom_s);
             $triple_room = $totalEmpty - ($btw_io + $btwroom_s);
             //echo $room;
        }else
        {
            $triple_room = -2;
        }
        
        //var_dump();
        $room_av = array($single_room , $double_room ,$triple_room);
        $req_av = array((int)$request->single , (int)$request->double , (int)$request->tripple);
        
        for($i = 0;$i < 3;$i++)
        {
            if($room_av[$i] != -2)
            {
                if(!($room_av[$i] >= $req_av[$i]))
                {
                    return 0;
                }
            }
        }
        return 1;
    }
    
    
   
}
