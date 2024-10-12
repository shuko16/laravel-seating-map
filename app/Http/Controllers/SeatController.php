<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeatController extends Controller
{
    public function offSeat($seat_no)
    {
        $seat = Seat::whereSeatNo($seat_no)->get()->first();
        $seat->seat_type = 2;
        $seat->user_id = null;
        $seat->save();

        return redirect()->route('index');
    }
    public function onSeat($seat_no)
    {
        $seat = Seat::whereSeatNo($seat_no)->get()->first();
        $seat->seat_type = 1;
        $seat->user_id = Auth::user()->id;
        $seat->save();
        
        return redirect()->route('index');
    }
}
