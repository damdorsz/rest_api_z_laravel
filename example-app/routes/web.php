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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dorsz/305357/people', function () {
    return ('bylem_tu');
});
Route::get('people', [PeopleController::class; 'index']);
Route::get('people/{people}', [PeopleController::class; 'show']);

