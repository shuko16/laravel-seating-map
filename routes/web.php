<?php

use App\Http\Controllers\ProfileController;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('layout');
})->name('index');

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

Route::post('/delete/{user_id}', function ($user_id) {
    $seat = Seat::where('user_id', $user_id)->first();
    $seat->user_id = null;
    $seat->save();
    $seats = Seat::all();
    return view('dashboard', ['seats' => $seats]);
})->middleware(['auth', 'verified'])->name('delete');

Route::post('/addSeated/{seat_no}', function ($seat_no) {
    $seat = Seat::whereSeatNo($seat_no)->get()->first();
    $seat->seat_type = 1;
    $seat->user_id = Auth::user()->id;
    $seat->save();
    return redirect()->route('index');
})->middleware(['auth', 'verified'])->name('addSeated');

Route::post('/removeSeated/{seat_no}', function ($seat_no) {
    $seat = Seat::whereSeatNo($seat_no)->get()->first();
    $seat->seat_type = 2;
    $seat->user_id = null;
    $seat->save();
    return redirect()->route('index');
})->middleware(['auth', 'verified'])->name('removeSeated');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
