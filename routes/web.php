<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('/');
Route::get('/tambah-data', [UserController::class, 'addData'])->name('tambah-data');
Route::POST('/tambah-data', [UserController::class, 'store'])->name('tambah-data');