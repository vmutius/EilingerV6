<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Application;

class CreateEnclosuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enclosures', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Application::class)->nullable($value = true);
            $table->boolean('hasID'); //Kopie des aktuellen Personalausweises
            $table->boolean('hasCV'); //Lebenslauf
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
        Schema::dropIfExists('enclosures');
    }
};
