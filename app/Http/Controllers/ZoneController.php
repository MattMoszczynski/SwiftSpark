<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SearchZoneRequest;
use App\Http\Resources\ZoneResource;
use App\Models\Zone;
use Illuminate\Http\JsonResponse;

class ZoneController extends Controller
{
    public function index(SearchZoneRequest $request): JsonResponse
    {
        $zones = Zone::query()
            ->search($request->validated())
            ->paginate();

        return new JsonResponse(ZoneResource::collection($zones));
    }

    public function show(Zone $zone): ZoneResource
    {
        return new ZoneResource($zone);
    }

    public function store()
    {
        abort(JsonResponse::HTTP_NOT_IMPLEMENTED);
    }

    public function update(Zone $zone)
    {
        abort(JsonResponse::HTTP_NOT_IMPLEMENTED);
    }

    public function destroy(Zone $zone): JsonResponse
    {
        $zone->delete();

        return new JsonResponse(status: JsonResponse::HTTP_NO_CONTENT);
    }
}
