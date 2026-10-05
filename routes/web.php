<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\VeterinarianController;

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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('veterinarians', VeterinarianController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('appointments', AppointmentController::class);
});
