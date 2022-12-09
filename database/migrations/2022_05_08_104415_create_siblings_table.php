<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiblingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siblings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appl_id')->nullable($value = true);
            $table->year('birth_year');
            $table->string('lastname', 255);
            $table->string('firstname', 255);
            $table->string('education', 255);
            $table->year('graduation_year');
            $table->string('place of residence', 500);
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
        Schema::dropIfExists('siblings');
    }
}
