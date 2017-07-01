<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    // checks for log in if yes return view 'dashboard'
    //else return view "home"
    if (!is_null($request->user())) {
        $user = $request->user();
        $adventures = $user->adventures()
            //->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->get();
        return view('dashboard', compact('user', 'adventures'));
            }
    else
        return view('welcome');
});

Route::resource('/adventure', 'AdventureController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
