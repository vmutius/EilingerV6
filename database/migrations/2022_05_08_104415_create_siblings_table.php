<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Application;

class CreateSiblingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siblings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Application::class)->nullable($value = true);
            $table->year('birth_year')->nullable($value = true);
            $table->string('lastname', 255)->nullable($value = true);
            $table->string('firstname', 255)->nullable($value = true);
            $table->string('education', 255)->nullable($value = true);
            $table->year('graduation_year')->nullable($value = true);
            $table->string('placeOfResidence', 500)->nullable($value = true);
            $table->boolean('getAmount')->nullable($value = true);
            $table->string('supportSite', 255)->nullable($value = true);
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
        Schema::dropIfExists('siblings');
    }
}
