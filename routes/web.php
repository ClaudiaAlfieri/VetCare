<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/login', 'login');

Route::view('/pets', 'pets.index');
Route::view('/pets/1', 'pets.show');
Route::view('/pets/create', 'pets.create');
Route::view('/pets/1/edit', 'pets.edit');
Route::view( uri: '/veterinarians', view: 'veterinarians.index'); // /veterinarians
