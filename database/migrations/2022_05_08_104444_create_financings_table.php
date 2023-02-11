<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Application;

class CreateFinancingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('application_id')->constrained()->nullable($value = true);
            $table->decimal('personalContribution', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('otherIncome', $precision=8, $scale=2)->nullable($value = true);
            $table->string('incomeWhere')->nullable($value = true);
            $table->string('incomeWho')->nullable($value = true);
            $table->decimal('nettoIncome', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('assets', $precision=8, $scale=2)->nullable($value = true);
            $table->decimal('scholarship', $precision=8, $scale=2)->nullable($value = true);
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
        Schema::dropIfExists('financings');
    }
}
