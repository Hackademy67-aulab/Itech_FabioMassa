<?php

use App\Http\Controllers\DettagliController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'primapagina'])->name('primapagina');

Route::get('/dettagli/{id}', [DettagliController::class, 'dettagli'])->name('dettagli');

Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');
Route::post('/contactsubmit', [PublicController::class, 'contactsubmit'])->name('contactsubmit');
