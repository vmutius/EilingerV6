<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('country_id')->constrained();
            $table->string('street', 50);
            $table->string('number', 10)->nullable();
            $table->string('plz', 20);
            $table->string('town', 50);
            $table->date('since')->nullable();
            $table->boolean('is_wochenaufenthalt')->default(false);
            $table->boolean('is_aboard')->default(false);
            $table->boolean('is_draft')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
