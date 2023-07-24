<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancingsTable extends Migration
{
    public function up()
    {
        Schema::create('financings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('application_id')->nullable()->onDelete('cascade');
            $table->decimal('personal_contribution', $precision = 8, $scale = 2)->nullable();
            $table->decimal('other_income', $precision = 8, $scale = 2)->nullable();
            $table->string('income_where')->nullable();
            $table->string('income_who')->nullable();
            $table->decimal('netto_income', $precision = 8, $scale = 2)->nullable();
            $table->decimal('assets', $precision = 8, $scale = 2)->nullable();
            $table->decimal('scholarship', $precision = 8, $scale = 2)->nullable();
            $table->decimal('required_amount', $precision = 8, $scale = 2)->nullable();
            $table->string('payout_plan');
            $table->decimal('total_amount_financing', $precision = 8, $scale = 2)->nullable();
            $table->boolean('is_draft')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('financings');
    }
}
