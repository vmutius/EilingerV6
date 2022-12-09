<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Application;

class CreateEducationTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Application::class)->nullable($value = true);
            $table->string('education');
            $table->string('name', 255);
            $table->string('final', 255);
            $table->string('grade');
            $table->integer('ects-points');
            $table->string('time');
            $table->date('begin_edu');
            $table->integer('duration_edu');
            $table->date('begin_appl');
            $table->integer('duration_appl');
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
        Schema::dropIfExists('educations');
    }
}
