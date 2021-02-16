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


Route::get('/welcomert2', function () {     
    $var = 4;
    return view('welcomert2' , compact('var'));

});



Route::get('/route3', function () {     
    $dols = 10;
    $dols2 = 10;
    
    return view('route3', compact("dols", "dols2") );

});













