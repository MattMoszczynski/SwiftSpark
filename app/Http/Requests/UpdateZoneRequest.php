<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\ZoneTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateZoneRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['nullable', 'string', Rule::in(ZoneTypeEnum::values())],
            'description' => ['nullable', 'string', 'max:65000'],
            'coordinates' => ['sometimes', 'required', 'array', 'min:3'],
            'coordinates.*.lat' => ['required', 'numeric', 'between:-90,90'],
            'coordinates.*.long' => ['required', 'numeric', 'between:-180,180'],
        ];
    }
}
