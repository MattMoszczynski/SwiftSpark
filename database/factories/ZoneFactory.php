<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\ZoneTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zone>
 */
class ZoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(ZoneTypeEnum::cases()),
            'description' => $this->faker->optional()->realText(),
            'coordinates' => $this->faker->randomElements([[
                'lat' => $this->faker->latitude(),
                'lng' => $this->faker->longitude(),
            ]], 4, allowDuplicates: true),
        ];
    }

    /**
     * Indicate that the zone is a no-ride zone.
     */
    public function noRide(): static
    {
        return $this->state(fn () => [
            'type' => ZoneTypeEnum::NoRide->value,
        ]);
    }

    /**
     * Indicate that the zone is a parking zone.
     */
    public function parking(): static
    {
        return $this->state(fn () => [
            'type' => ZoneTypeEnum::Parking->value,
        ]);
    }
}
