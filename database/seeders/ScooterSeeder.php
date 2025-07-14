<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Scooter;
use Illuminate\Database\Seeder;

class ScooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scooter::factory(20)->available()->create();
        Scooter::factory(10)->deadBattery()->create();
        Scooter::factory(40)->create();
    }
}
