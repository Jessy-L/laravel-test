<?php

use Facade\FlareClient\Http\Client;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/a-propos', function () {
    return view('a-propos');
});


// Appelle le controller et la  methode list 

Route::get('clients', 'App\Http\Controllers\ClientsController@list');

// Appelle le controller et la  methode store 

Route::post('clients', 'App\Http\Controllers\ClientsController@store');
