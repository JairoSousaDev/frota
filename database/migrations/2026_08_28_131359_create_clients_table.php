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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name_client');
            $table->string('cpf_client')->unique();
            $table->string('rg_client')->unique();
            $table->string('phone_client')->nullable();
            $table->string('email_client')->unique();
            $table->string('state_client')->nullable();
            $table->string('city_client')->nullable();
            $table->string('district_client')->nullable();
            $table->string('address_client')->nullable();
            $table->string('number_client')->nullable();
            $table->string('observation_client')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
