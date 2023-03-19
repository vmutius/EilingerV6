<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsTable extends Migration
{
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('application_id')->nullable()->onDelete('cascade');
            $table->decimal('semester_fees', $precision = 8, $scale = 2)->nullable();
            $table->decimal('fees', $precision = 8, $scale = 2)->nullable();
            $table->decimal('educational_material', $precision = 8, $scale = 2)->nullable();
            $table->decimal('excursion', $precision = 8, $scale = 2)->nullable();
            $table->decimal('travel_expenses', $precision = 8, $scale = 2)->nullable();
            $table->decimal('cost_of_living_with_parents', $precision = 8, $scale = 2)->nullable();
            $table->decimal('cost_of_living_alone', $precision = 8, $scale = 2)->nullable();
            $table->decimal('cost_of_living_single_parent', $precision = 8, $scale = 2)->nullable();
            $table->decimal('cost_of_living_with_partner', $precision = 8, $scale = 2)->nullable();
            $table->decimal('number_of_children', $precision = 8, $scale = 2)->nullable();
            $table->foreignId('status_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('costs');
    }
}
