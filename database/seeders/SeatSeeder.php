<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [7, 8,14,15,16,17];
        foreach ($arr as $val) {
            Seat::create([
                'user_id' => 1,
                'seat_no' => $val,
                'seat_type' => 1,
    
            ]);
    
        }

       
        // for ($i = 0; $i < 5; $i++) {
        //     Seat::create([]);
        // }

        // Seat::create([
        //     'user_id' => 2,
        // ]);

    }
}
