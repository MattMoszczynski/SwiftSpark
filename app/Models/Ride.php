<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Model representing a ride taken by a user on a scooter.
 *
 * @property-read int $id
 *
 * @property int $user_id
 * @property int $scooter_id
 * @property Carbon $started_at
 * @property Carbon|null $ended_at
 * @property float $distance Distance in kilometers
 * @property array|ArrayObject $waypoints
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read User $user
 * @property-read Scooter $scooter
 */
class Ride extends Model
{
    protected $fillable = [
        'user_id',
        'scooter_id',
        'started_at',
        'ended_at',
        'distance',
    ];

    protected $attributes = [
        'distance' => 0.0,
        'waypoints' => '[]',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
        'distance' => 'float',
        'waypoints' => AsArrayObject::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scooter(): BelongsTo
    {
        return $this->belongsTo(Scooter::class);
    }
}
