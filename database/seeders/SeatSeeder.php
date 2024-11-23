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
        $arr = [7,8,10,
        14,15,16,17,19,
        34,
        37,38,40,41,
        49,52,55,58,
        67,68,
        73,82,
        96,
        97,102,103,104,105,107,108,
        133,138,139,140,141,144,145,157,
        423,425,426,429,430,
        438,441,
        447,
        471,474,477,
        485,486,489,490,
        495,
        505,
        517,518,520,521,522,
        553,556,557,558,
    ];

        foreach ($arr as $val) {
            Seat::create([
                'user_id' => null,
                'seat_no' => $val,
                'seat_type' => 2,
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
