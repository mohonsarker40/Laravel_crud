<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('/people', \App\Http\Controllers\PeopleController::class);

