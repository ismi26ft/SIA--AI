<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/assessments', [AssessmentController::class, 'index'])
    ->name('assessments.index');
    
    Route::get('/assessments/create', [AssessmentController::class, 'create'])
        ->name('assessments.create');

    Route::post('/assessments', [AssessmentController::class, 'store'])
        ->name('assessments.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
