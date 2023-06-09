<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdherentControl;

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
    return view('template');
});

Route::get('/adherents', [App\Http\Controllers\AdherentControl::class, 'getAdherent']);
Route::resource('evenement','App\Http\Controllers\EvenementControl');