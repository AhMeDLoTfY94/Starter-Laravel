<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Front\FristController@getindex');


Route::resource("news","NewsController");

Route::get("/in",function (){
   return view("landing");
});

Route::get('/about','NewsController@getabout');

Auth::routes(['verify'=>True]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');

