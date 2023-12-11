<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('type');
            $table->string('salutation');
            $table->boolean('is_admin')->default(false);
            $table->string('lastname', 255);
            $table->string('firstname', 255);
            $table->date('birthday')->nullable();
            $table->string('nationality', 2)->nullable();
            $table->string('phone', 20);
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('name_inst', 255)->nullable()->unique();
            $table->string('email_inst', 100)->nullable()->unique();
            $table->string('phone_inst', 20)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('soz_vers_nr', 20)->nullable();
            $table->string('civil_status')->nullable();
            $table->date('married_since')->nullable();
            $table->date('in_ch_since')->nullable();
            $table->char('granting')->nullable();
            $table->string('contact_aboard')->nullable();
            $table->boolean('is_draft')->default(true);
            $table->string('two_factor_code')->nullable();
            $table->dateTime('two_factor_expires_at')->nullable();
            $table->index('email');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
