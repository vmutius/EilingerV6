<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateApplicationsTable extends Migration
{

    public function up()
    {/**
     * Status
     *
     * not_send = noch nicht eingereicht
     * pending = Wartet auf Antwort der Stiftung
     * waiting = Wartet auf Antwort vom Benutzer
     * blocked = abgelehnt
     * approved = bewilligt
     */

        Schema::create('applications', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->foreignId('user_id')->constrained();
            $table->string('appl_status')->default('not_send');
            $table->string('bereich');
            $table->longText('comment');
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
