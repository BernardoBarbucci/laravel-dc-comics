<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FumettoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.app');
});

Route::resource('fumetti', FumettoController::class);

// rotta per create
Route::get('/fumetti/create', [FumettoController::class, 'create'])->name('fumetti.create');

// rotta per store
Route::post('/fumetti', [FumettoController::class, 'store'])->name('fumetti.store');
