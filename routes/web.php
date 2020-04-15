<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Route::get('/chat', 'ChatController@index')->name('chat');

Route::get('/messages', 'ChatController@fetchMessages')->name('messages');
Route::post('/messages', 'ChatController@sendMessage');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
