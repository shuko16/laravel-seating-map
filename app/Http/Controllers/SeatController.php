<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatController extends Controller
{   
    public function offSeat($seat_no)
    {
        dd($seat_no); 
    } 
    public function onSeat($seat_no)
    {
        dd($seat_no); 
    } 
}
