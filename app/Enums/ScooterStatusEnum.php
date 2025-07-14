<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\EnumHelpers;

enum ScooterStatusEnum: string
{
    use EnumHelpers;

    case Available = 'available';
    case Inactive = 'inactive';
    case InUse = 'in_use';
    case Maintenance = 'maintenance';
    case Lost = 'lost';
}
