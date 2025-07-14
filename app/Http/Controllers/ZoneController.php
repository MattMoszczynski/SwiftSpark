<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SearchZoneRequest;
use App\Http\Requests\StoreZoneRequest;
use App\Http\Requests\UpdateZoneRequest;
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

    public function store(StoreZoneRequest $request): JsonResponse
    {
        $zone = Zone::create($request->validated());

        return new JsonResponse(new ZoneResource($zone), status: JsonResponse::HTTP_CREATED);
    }

    public function update(UpdateZoneRequest $request, Zone $zone): JsonResponse
    {
        $zone->update($request->validated());

        return new JsonResponse(new ZoneResource($zone), status: JsonResponse::HTTP_OK);
    }

    public function destroy(Zone $zone): JsonResponse
    {
        $zone->delete();

        return new JsonResponse(status: JsonResponse::HTTP_NO_CONTENT);
    }
}
