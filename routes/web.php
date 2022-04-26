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


Route::get('/hello', function () {
    $data = [
        'myText' => 'Hello world',
    ];
    return view('hello', $data);
});

Route::get('/link', function () {
    $data = [
        'myLink' => 'First Link Utilized',
    ];
    return view('link', $data);
});

Route::get('/contatti', function () {
    $data = [
        'myContact' => 'Marzio Della Rocca',
    ];
    return view('contatti', $data);
});

Route::get('/img', function () {
    $data = [
        'img' => 'https://picsum.photos/200/300',
    ];
    return view('img', $data);
});

Route::get('/email', function () {
    $data = [
        'email' => 'marziodellarocca14@gmail.com',
    ];
    return view('email', $data);
});
