<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user_table;
use DB;

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
    }
}
