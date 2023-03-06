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
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('parent_type');
            $table->string('lastname', 255)->nullable();;
            $table->string('firstname', 255)->nullable();;
            $table->date('birthday')->nullable();;
            $table->string('telefon', 20)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('plz_ort', 255)->nullable();
            $table->date('since')->nullable();
            $table->string('job_type')->nullable();;
            $table->string('job', 255)->nullable();
            $table->string('employer', 255)->nullable();
            $table->date('in_ch_since')->nullable();
            $table->date('married_since')->nullable();
            $table->date('separated_since')->nullable();
            $table->date('divorced_since')->nullable();
            $table->year('death')->nullable();
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
