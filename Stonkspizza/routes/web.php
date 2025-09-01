<?php

use App\Http\Controllers\BestelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\MedewerkersController;
use App\Http\Controllers\IngredientenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MandjeController;
use App\Http\Controllers\StatusController;


Route::get('/', function () {
    return redirect('/menu');
});

Route::resource('menu', MenuController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('mandje', MandjeController::class);
    Route::resource('status', StatusController::class);
    Route::resource('bestel', BestelController::class);
    Route::resource('pizza', PizzaController::class);
    Route::resource('medewerkers', MedewerkersController::class);
    Route::resource('ingredienten', IngredientenController::class);
});
Route::put('/cancel', [StatusController::class, 'cancel']);

require __DIR__.'/auth.php';
