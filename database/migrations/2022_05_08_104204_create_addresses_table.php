<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appl_id')->nullable($value = true);
            $table->string('street', 50);
            $table->string('number', 10)->nullable($value = true);
            $table->string('plz', 20);
            $table->string('town', 50);
            $table->string('country', 2)->default('CH');
            $table->date('since')->nullable($value = true);
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
        Schema::dropIfExists('addresses');
    }
}
