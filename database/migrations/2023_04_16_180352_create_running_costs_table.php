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
        Schema::create('running_costs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->onDelete('cascade');
            $table->string('running_costs_name');
            $table->decimal('running_costs_amount', $precision = 8, $scale = 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('running_costs');
    }
};
