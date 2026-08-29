<?php

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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('model_vehicle');
            $table->string('brand_vehicle');
            $table->string('plate_vehicle')->unique();
            $table->string('year_vehicle');
            $table->string('chassi_vehicle')->unique();
            $table->string('crv_vehicle')->unique();
            $table->string('renavan_vehicle')->unique();
            $table->string('color_vehicle')->nullable();
            $table->boolean('status_vehicle')->default(true);
            $table->string('observation_vehicle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
