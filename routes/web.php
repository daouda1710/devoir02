<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/etudiant', [EtudiantController::class, 'etudiant'])->name('liste.etudiant');
Route::get('/ajout', [EtudiantController::class, 'ajout'])->name('ajout.etudiant');

Route::post('/store', [EtudiantController::class, 'store'])->name('store.etudiant');
