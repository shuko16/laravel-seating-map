<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeatController;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (Request $request) {
    if ($request->user_id) {
        if (Seat::where('user_id', $request->user_id)->count()) {
            $seated_data = Seat::where('user_id', $request->user_id)->first();
            $seated_data->user_id = null;
            $seated_data->save();
        }

        $seat = Seat::find($request->seat_id);
        $seat->user_id = $request->user_id;
        $seat->save();
    }
    $seats = Seat::all();
    return view('dashboard', ['seats' => $seats]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/seat', [SeatController::class, 'index'])->name('index');
    Route::post('/offSeat/{seat_no}', [SeatController::class, 'offSeat'])->name('offSeat');
    Route::post('/onSeat/{seat_no}', [SeatController::class, 'onSeat'])->name('onSeat');
});

require __DIR__ . '/auth.php';
