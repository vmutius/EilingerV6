<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiblingsTable extends Migration
{
    public function up()
    {
        Schema::create('siblings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->year('birth_year')->nullable();
            $table->string('lastname', 255)->nullable();
            $table->string('firstname', 255)->nullable();
            $table->string('education', 255)->nullable();
            $table->year('graduation_year')->nullable();
            $table->string('place_of_residence', 500)->nullable();
            $table->boolean('get_amount')->nullable();
            $table->string('support_site', 255)->nullable();
            $table->string('status')->default('draft');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siblings');
    }
}
