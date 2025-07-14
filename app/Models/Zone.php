<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ZoneTypeEnum;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Model representing a special zone related to rides or scooters.
 *
 * @property-read int $id
 *
 * @property ZoneTypeEnum $type
 * @property string|null $description
 * @property array|ArrayObject $coordinates
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Zone extends Model
{
    /** @use HasFactory<\Database\Factories\ZoneFactory> */
    use HasFactory;

    protected $fillable = [
        'type',
        'description',
        'coordinates',
    ];

    protected function casts(): array
    {
        return [
            'type' => ZoneTypeEnum::class,
            'coordinates' => AsArrayObject::class,
        ];
    }

    #[Scope]
    protected function search(Builder $query, array $filters): Builder
    {
        if (array_key_exists('type', $filters)) {
            $query->where('type', $filters['type']);
        }

        return $query;
    }
}
