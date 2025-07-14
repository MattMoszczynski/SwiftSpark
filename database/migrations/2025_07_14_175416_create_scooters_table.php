<?php

declare(strict_types=1);

use App\Enums\ScooterStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scooters', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->unique();
            $table->enum('status', ScooterStatusEnum::values())
                ->default(ScooterStatusEnum::Inactive->value);
            $table->float('latitude');
            $table->float('longitude');
            $table->smallInteger('battery_level')
                ->unsigned()
                ->default(100);
            $table->timestamp('last_maintenance_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scooters');
    }
};
