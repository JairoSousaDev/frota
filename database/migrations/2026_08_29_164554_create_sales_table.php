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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')
                ->constrained('vehicles')
                //não permitirá apagar o registro que possui uma venda relacionada.
                ->restrictOnDelete();
            $table->foreignId('client_id')
                ->constrained('clients')
                //não permitirá apagar o registro que possui uma venda relacionada.
                ->restrictOnDelete();
            $table->decimal('sale_price', 12, 2);
            $table->date('date_sale');
            $table->text('observation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
