<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Application;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Application::class)->nullable($value = true);
            $table->string('parent_type');
            $table->string('lastname', 255);
            $table->string('firstname', 255);
            $table->date('birthday');
            $table->string('telefon', 20)->nullable($value = true);
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
        Schema::dropIfExists('parents');
    }
}
