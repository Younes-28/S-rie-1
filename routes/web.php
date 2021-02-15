<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/younes', function () 
{     
    $younes = 'Ben Chaib';     
    return $younes; 
});


Route::get('/', function () {     
    $var = 4;
    return view('welcome' , compact('var'));

});


Route::get('/ex3',function(){
    $var1 = 70;
    $var2 = 80;
    return view("home", compact("70","80"));
});

