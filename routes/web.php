<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/pendaftar', [MainController::class, 'studentList'])->name('student.list');
Route::post('/pendaftar', [MainController::class, 'studentFind'])->name('student.find');
Route::post('/cetak-kartu', [MainController::class, 'print'])->name('print');
