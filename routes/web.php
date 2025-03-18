<?php

use Illuminate\Support\Facades\Route;



Route::resource('/people', \App\Http\Controllers\PeopleController::class);
Route::get('/', [\App\Http\Controllers\PeopleController::class, 'index']);
