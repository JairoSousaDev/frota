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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('name_current_owner');
            $table->string('cpf_current_owner');
            $table->string('phone_current_owner');
            $table->string('address_current_owner');
            $table->string('name_former_owner');
            $table->date('receipt_date');
            $table->date('submission_date');
            $table->string('plate_vehicle');
            $table->string('model_vehicle');
            $table->string('renavan_vehicle');
            $table->decimal('sale_price', 12, 2);
            $table->string('address_former_owner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
