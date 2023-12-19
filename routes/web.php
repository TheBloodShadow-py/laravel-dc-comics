<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', [ComicController::class, 'index'])->name('home');

Route::get('/comic/{comic}', [ComicController::class, 'show'])->name('comic');

Route::get('/create', [ComicController::class, 'create'])->name('create');

Route::post('/store', [ComicController::class, 'store'])->name('store');

Route::get('/edit/{comic}', [ComicController::class, 'edit'])->name('edit');

Route::put('/edit/{comic}', [ComicController::class, 'update'])->name('update');

Route::delete('/delete/{comic}', [ComicController::class, 'delete'])->name('destroy');
