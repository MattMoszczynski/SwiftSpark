<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require_once __DIR__.'/api/zones.php';

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
