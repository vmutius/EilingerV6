<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Application;

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
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Application::class)->nullable($value = true);
            $table->decimal('semester_fees', $precision=8, $scale=2);
            $table->decimal('fees', $precision=8, $scale=2);
            $table->decimal('educational_material', $precision=8, $scale=2);
            $table->decimal('excursion', $precision=8, $scale=2);
            $table->decimal('travel_expenses', $precision=8, $scale=2);
            $table->decimal('cost_of_living', $precision=8, $scale=2);
            $table->decimal('cost_childeren', $precision=8, $scale=2);
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
