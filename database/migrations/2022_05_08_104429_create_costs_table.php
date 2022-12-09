<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appl_id')->nullable($value = true);
            $table->decimal('semester_fees', $precision=8, $scale=2);
            $table->decimal('fees', $precision=8, $scale=2);
            $table->decimal('educational_material', $precision=8, $scale=2);
            $table->decimal('excursion', $precision=8, $scale=2);
            $table->decimal('travel_expenses', $precision=8, $scale=2);
            $table->decimal('cost_of_living', $precision=8, $scale=2);
            $table->decimal('cost_childeren', $precision=8, $scale=2);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('appl_id')->references('id')->on('applications');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costs');
    }
}
