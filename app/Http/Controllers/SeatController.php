<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SeatController extends Controller
{
    public function index()
    {
        $seatedList = Seat::whereSeatType(1)->pluck('seat_no')->toArray();
        $emptyList = Seat::whereSeatType(2)->pluck('seat_no')->toArray();
        $seatUsersList = Seat::whereSeatType(1)->with('user')->get();
        $seatUsers = [];
        foreach ($seatUsersList as $seatUser) {
            $seatUsers[$seatUser->seat_no] = $seatUser->user->name ?? 'なし';
        }
        return view('index', compact('seatedList', 'emptyList', 'seatUsersList', 'seatUsers'));
    }

    public function offSeat($seat_no)
    {
        if (
            Seat::whereSeatNo($seat_no)
            ->whereNot('user_id', Auth::user()->id)
            ->get()
            ->count()
            >= 1
        ) {
            throw ValidationException::withMessages(['otherUserSeated' => 'other user already seated.']);
        };

        $seat = Seat::whereSeatNo($seat_no)->get()->first();
        $seat->seat_type = 2;
        $seat->user_id = null;
        $seat->save();

        return redirect()->route('index');
    }
    public function onSeat($seat_no)
    {
        $seated = Seat::whereUserId(Auth::user()->id)->get()->first();
        // dd($seated);
        if ($seated) {
            $seat = Seat::whereSeatNo($seated->seat_no)->get()->first();
            $seat->seat_type = 2;
            $seat->user_id = null;
            $seat->save();
        }

        $seat = Seat::whereSeatNo($seat_no)->get()->first();
        $seat->seat_type = 1;
        $seat->user_id = Auth::user()->id;

        $seat->save();

        return redirect()->route('index');
    }
}
