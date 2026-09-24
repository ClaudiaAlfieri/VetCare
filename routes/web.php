<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Página pública
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Recursos
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::resource('pets', PetController::class);
});

Route::view(uri: '/veterinarians', view: 'veterinarians.index');
Route::view(uri: '/veterinarians/1', view: 'veterinarians.show');
Route::view(uri: '/veterinarians/create', view: 'veterinarians.create');
Route::view(uri: '/veterinarians/1/edit', view: 'veterinarians.edit');
Route::view(uri: '/services', view: 'services.index');
Route::view(uri: '/services/1', view: 'services.show');
Route::view(uri: '/services/create', view: 'services.create');
Route::view(uri: '/services/1/edit', view: 'services.edit');
Route::view(uri: '/appointments', view: 'appointments.index');
Route::view(uri: '/appointments/1', view: 'appointments.show');
Route::view(uri: '/appointments/create', view: 'appointments.create');
Route::view(uri: '/appointments/1/edit', view: 'appointments.edit');
