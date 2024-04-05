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
            $table->integer('duration_edu')->nullable(); // in Jahren
            $table->integer('start_semester')->nullable(); // Gesuch gestellt ab start_semester
            $table->string('initial_education')->nullable();
            $table->boolean('is_draft')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
