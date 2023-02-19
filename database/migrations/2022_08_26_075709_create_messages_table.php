<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Application;
use App\Models\User;

class CreateMessagesTable extends Migration
{

    public function up()
    { /**
        * Status
        *
        * not_send = noch nicht eingereicht
        * pending = Wartet auf Antwort der Stiftung
        * waiting = Wartet auf Antwort vom Benutzer
        */
        
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(Application::class);
            $table->foreignIdFor(User::class);
            $table->foreignId('parent_id')->nullable()->constrained('messages')->onDelete('cascade');
            $table->longText('body');
            $table->longText('answer')->nullable();
            $table->string('msg_status')->default('not_send');
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
        Schema::dropIfExists('messages');
    }
};
