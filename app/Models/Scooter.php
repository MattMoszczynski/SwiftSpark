<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ScooterStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Model representing an electric scooter that can be rented by users.
 *
 * @property-read int $id
 *
 * @property string $serial_number
 * @property ScooterStatusEnum $status
 * @property string|null $location
 * @property int $battery_level
 * @property float $latitude
 * @property float $longitude
 * @property Carbon|null $last_maintenance_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Scooter extends Model
{
    /** @use HasFactory<\Database\Factories\ScooterFactory> */
    use HasFactory;

    protected $fillable = [
        'serial_number',
        'status',
        'latitude',
        'longitude',
        'battery_level',
        'last_maintenance_at',
    ];

    protected $attributes = [
        'status' => ScooterStatusEnum::INACTIVE->value,
        'battery_level' => 100,
    ];

    protected function casts(): array
    {
        return [
            'status' => ScooterStatusEnum::class,
            'last_maintenance_at' => 'datetime',
        ];
    }
}
