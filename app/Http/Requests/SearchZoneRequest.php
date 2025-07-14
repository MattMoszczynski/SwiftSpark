<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\ZoneTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SearchZoneRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['string', Rule::in(ZoneTypeEnum::values())],
        ];
    }
}
