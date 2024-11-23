<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/seat', [SeatController::class, 'index'])->name('index');
    Route::post('/offSeat/{seat_no}', [SeatController::class, 'offSeat'])->name('offSeat');
    Route::post('/onSeat/{seat_no}', [SeatController::class, 'onSeat'])->name('onSeat');
});

require __DIR__ . '/auth.php';
