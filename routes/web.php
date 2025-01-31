<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// basic routing
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/import-data', function () {
    return view('import-data');
})->middleware(['auth', 'verified'])->name('import-data');

// test route parameters and constraints.
Route::get('/user/{id}', function ($id) {
    return view('user', ['id' => $id]);
})->middleware(['auth', 'verified'])->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
