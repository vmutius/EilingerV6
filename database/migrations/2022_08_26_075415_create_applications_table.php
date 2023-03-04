<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateApplicationsTable extends Migration
{

    public function up()
    {

        Schema::create('applications', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->foreignId('user_id')->constrained();
            $table->string('appl_status')->default('not_send');
            $table->string('bereich');
            $table->string('form');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->longText('comment');
            $table->longText('reason');
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
        Schema::dropIfExists('applications');
    }
};
