<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;
/*Route::get('user/{username}', function($username){
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
    $user = $_SESSION;
    return view('pages.profile-page' , $user);
});*/
Route::get('/',"RouteController@home");
Route::get('reserve', "RouteController@reserve");
Route::get('gallery', "RouteController@gallery" );
Route::get('admin' , "RouteController@admin");
Route::get('manager' , "RouteController@manager");
Route::get('edit' , "RouteController@edit");
Route::get('profile/{username?}' , "RouteController@profile");
Route::get('receptionist' , "RouteController@receptionist");


Route::post('login', "operation_controller@login");
Route::post('serve', "operation_controller@reserveation");
/*********************************************************/

Route::post('signup',"operationController@signup");
Route::post('logout' , "operationController@logout");
Route::post('checkAvailability', "operationController@checkAvailability" );


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
