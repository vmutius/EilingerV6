<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Application;
use App\Models\User;

class CreateMessagesTable extends Migration
{

    public function up()
    {         
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(Application::class);
            $table->foreignIdFor(User::class);
            $table->foreignId('mainmessage_id')->nullable()->constrained('messages')->onDelete('cascade'); // Für Reply
            $table->text('body');
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
