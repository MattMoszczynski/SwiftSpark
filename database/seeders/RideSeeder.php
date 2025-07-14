<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Ride;
use App\Models\Scooter;
use App\Models\User;
use Illuminate\Database\Seeder;

class RideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::pluck('id');
        $scooters = Scooter::pluck('id');

        foreach ($users as $userId) {
            $scooterId = $scooters->random();

            Ride::create([
                'user_id' => $userId,
                'scooter_id' => $scooterId,
                'started_at' => now()->subHours(rand(1, 5)),
                'ended_at' => now()->subHours(rand(0, 5)),
                'distance' => rand(1, 10),
            ]);
        }
    }
}
