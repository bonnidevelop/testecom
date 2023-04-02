<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;

use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [usercontroller::class,'login']);

Route::get('/pro', [productcontroller::class,'index']);

Route::get('details/{id}',[productcontroller::class,'details']);

Route::get('/search',[productcontroller::class,'search']);

Route::get('/addcart',[productcontroller::class,'addcart']);

Route::get('/logout', function () {
    Session::forget('user');

    return view('login');
});
