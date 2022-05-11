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
Route::get('/ticket','ticketController@index');

Route::post('/store','ticketController@store');

Route::get('/{ticket}/edit','ticketController@edit');

Route::post('/update/{ticket}','ticketController@update');

Route::delete('delete/{id}','ticketController@destroy');

Route::get('new_ticket', function () {
    return view('new_ticket');
});
Route::get('/create','TicketController@create');
Route::get('show_ticket', function () {
    return view('show_ticket');
});


Route::get('/', function () {
    return view('welcome');
});
