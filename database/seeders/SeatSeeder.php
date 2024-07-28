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
        Seat::create([
            'user_id' => 1,
        ]);

        for ($i = 0; $i < 5; $i++) {
            Seat::create([]);
        }

        Seat::create([
            'user_id' => 2,
        ]);

    }
}