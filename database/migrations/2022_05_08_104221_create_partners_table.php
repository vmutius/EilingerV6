<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appl_id')->nullable($value = true);
            $table->string('lastname', 255);
            $table->string('firstname', 255);
            $table->date('birthday');
            $table->string('profession', 255)->nullable($value = true);
            $table->date('begin')->nullable($value = true);
            $table->date('end')->nullable($value = true);
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
        Schema::dropIfExists('partners');
    }
}