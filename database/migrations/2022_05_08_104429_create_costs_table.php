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
            $table->decimal('semesterFees', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('fees', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('educationalMaterial', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('excursion', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('travelExpenses', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('costOfLivingWithParents', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('costOfLivingAlone', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('costOfLivingSingleParent', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('costOfLivingWithPartner', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('numberOfChildren', $precision=8, $scale=2)->nullable($value = true);
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
