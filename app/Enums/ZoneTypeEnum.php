<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\EnumHelpers;

enum ZoneTypeEnum: string
{
    use EnumHelpers;

    case NoRide = 'no_ride';
    case Parking = 'parking';
}
