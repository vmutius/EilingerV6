<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('username')->unique();
            $table->string('type');
            $table->string('salutation');
            $table->boolean('isAdmin')->default(false);
            $table->string('lastname', 255);
            $table->string('firstname', 255);
            $table->date('birthday')->nullable($value = true);
            $table->string('nationality', 2)->nullable($value = true);
            $table->string('telefon', 20);
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('nameInst', 255)->nullable($value = true)->unique();
            $table->string('emailInst', 100)->nullable($value = true)->unique();
            $table->string('telefonInst', 20)->nullable($value = true);
            $table->string('website', 255)->nullable($value = true);
            $table->string('mobile', 20)->nullable($value = true);
            $table->string('sozVersNr', 20)->nullable($value = true);
            $table->string('civilStatus')->nullable($value = true);
            $table->date('inCHsince')->nullable($value = true);
            $table->char('bewilligung')->nullable($value = true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
