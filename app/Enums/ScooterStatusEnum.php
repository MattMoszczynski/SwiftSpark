<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\EnumHelpers;

enum ScooterStatusEnum: string
{
    use EnumHelpers;

    case AVAILABLE = 'available';
    case INACTIVE = 'inactive';
    case IN_USE = 'in_use';
    case MAINTENANCE = 'maintenance';
    case LOST = 'lost';
}
