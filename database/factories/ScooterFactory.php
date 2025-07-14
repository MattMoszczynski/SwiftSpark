<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\ScooterStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Scooter>
 */
class ScooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => $this->faker->unique()->bothify('SN-#####'),
            'status' => $this->faker->randomElement(ScooterStatusEnum::cases()),
            'latitude' => $this->faker->latitude(53.3500, 53.4800), // Szczecin latitude range
            'longitude' => $this->faker->longitude(14.5000, 14.7000), // Szczecin longitude range
            'battery_level' => $this->faker->numberBetween(0, 100),
            'last_maintenance_at' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
        ];
    }

    /**
     * Indicate that the scooter is active.
     */
    public function available(): static
    {
        return $this->state(fn () => [
            'status' => ScooterStatusEnum::Available->value,
        ]);
    }

    /**
     * Indicate that the scooter has dead battery.
     */
    public function deadBattery(): static
    {
        return $this->state(fn () => [
            'battery_level' => 0,
        ]);
    }
}
