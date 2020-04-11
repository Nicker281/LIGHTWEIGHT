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

Route::get('/', function () {
    return view('home');
});

Route::get('/shop/{shop}', 'Shop@Show');

Route::get('/challenges', function () {
    return view('challenges');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
<<<<<<< HEAD
Route::post('/contact', function () {
    return redirect('/');
});
=======

Route::post('/contact', function()  {
    return view('contact');
});
>>>>>>> 61ca93e1cb1d2e9e687905b11834223a1acbe5f8
