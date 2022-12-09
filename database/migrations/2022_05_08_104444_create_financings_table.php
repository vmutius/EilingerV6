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
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Application::class)->nullable($value = true);
            $table->decimal('personal_contribution', $precision=8, $scale=2);
            $table->decimal('other_income', $precision=8, $scale=2);
            $table->string('income_where');
            $table->string('income_what');
            $table->decimal('netto_income', $precision=8, $scale=2);
            $table->decimal('assets', $precision=8, $scale=2);
            $table->decimal('scholarship', $precision=8, $scale=2);
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
