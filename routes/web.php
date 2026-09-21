<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/login', 'login');

Route::view('/pets', 'pets.index');
Route::view('/pets/1', 'pets.show');
Route::view('/pets/create', 'pets.create');
Route::view('/pets/1/edit', 'pets.edit');
Route::view(uri: '/veterinarians', view: 'veterinarians.index');
Route::view(uri: '/veterinarians/1', view: 'veterinarians.show');
Route::view(uri: '/veterinarians/create', view: 'veterinarians.create');
Route::view(uri: '/veterinarians/1/edit', view: 'veterinarians.edit');
Route::view(uri: '/services', view: 'services.index');
