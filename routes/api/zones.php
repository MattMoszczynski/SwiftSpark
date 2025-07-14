<?php

declare(strict_types=1);

use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;

Route::get('zones', [ZoneController::class, 'index'])
    ->name('zones.index');

Route::get('zones/{zone}', [ZoneController::class, 'show'])
    ->name('zones.show');

Route::post('zones', [ZoneController::class, 'store'])
    ->name('zones.store');
// ->middleware('auth:sanctum'); TODO: Uncomment when AuthController is ready

Route::patch('zones/{zone}', [ZoneController::class, 'update'])
    ->name('zones.update');
// ->middleware('auth:sanctum'); TODO: Uncomment when AuthController is ready

Route::delete('zones/{zone}', [ZoneController::class, 'destroy'])
    ->name('zones.destroy');
// ->middleware('auth:sanctum'); TODO: Uncomment when AuthController is ready
