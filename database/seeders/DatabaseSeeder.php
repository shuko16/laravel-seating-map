<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'taro',
            'email' => 'taro@test.com',
        ]);
        User::factory()->create([
            'name' => 'jiro',
            'email' => 'jiro@test.com',
        ]);

        $this->call([
            SeatSeeder::class,
        ]);

    }
}
