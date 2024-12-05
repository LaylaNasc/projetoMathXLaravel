<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/generate-exercises', [MainController::class, 'generateExercises'])->name('generateExercises');
Route::get('/print-exercises', [MainController::class, 'printExercises'])->name('printExercises');
Route::get('/export-exercises', [MainController::class, 'exportExercises'])->name('exportExercises');
