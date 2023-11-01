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
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('satzung');
            $table->decimal('bilanz', $precision = 19, $scale = 2)->nullable();
            $table->boolean('is_gemeinnuetzig')->default(false);
            $table->string('register');
            $table->string('paragraph_11');
            $table->string('report');
            $table->boolean('is_released');
            $table->integer('number_of_members');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisations');
    }
};
