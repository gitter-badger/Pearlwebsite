<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class operation_controller extends Controller
{
    public function login(Request $request)
    {
        $name = $request->name;
        $password = $request->pass;
        $this->validate($request , [
    		'name'  => 'required',  
    		'pass'=>'required'
    	]);
    }
}
