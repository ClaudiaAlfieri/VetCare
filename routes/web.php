<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/pets', 'pets.index');
Route::view('/pets/1', 'pets.show');
Route::view('/pets/create', 'pets.create');
