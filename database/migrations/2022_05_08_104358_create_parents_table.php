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
            $table->foreignId('user_id')->constrained();
            $table->foreignIdFor(Application::class)->nullable($value = true);
            $table->string('parent_type');
            $table->string('lastname', 255)->nullable($value = true);;
            $table->string('firstname', 255)->nullable($value = true);;
            $table->date('birthday')->nullable($value = true);;
            $table->string('telefon', 20)->nullable($value = true);
            $table->string('address', 255)->nullable($value = true);
            $table->string('plz_ort', 255)->nullable($value = true);
            $table->date('since')->nullable($value = true);
            $table->string('job_type')->nullable($value = true);;
            $table->string('job', 255)->nullable($value = true);
            $table->string('employer', 255)->nullable($value = true);
            $table->date('inCHsince')->nullable($value = true);
            $table->date('marriedSince')->nullable($value = true);
            $table->date('separatedSince')->nullable($value = true);
            $table->date('divorcedSince')->nullable($value = true);
            $table->year('death')->nullable($value = true);
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
