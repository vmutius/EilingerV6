<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('application_id')->nullable()->onDelete('cascade');
            $table->string('education')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('final', 255)->nullable();
            $table->string('grade')->nullable();
            $table->integer('ects_points')->nullable();
            $table->string('time')->nullable();
            $table->date('begin_edu')->nullable();
            $table->integer('duration_edu')->nullable();
            $table->date('begin_appl')->nullable();
            $table->integer('duration_appl')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
