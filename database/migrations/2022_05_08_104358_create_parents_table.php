<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('parent_type');
            $table->string('lastname', 255)->nullable();
            $table->string('firstname', 255)->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('plz_ort', 255)->nullable();
            $table->date('since')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job', 255)->nullable();
            $table->string('employer', 255)->nullable();
            $table->date('in_ch_since')->nullable();
            $table->date('married_since')->nullable();
            $table->date('separated_since')->nullable();
            $table->date('divorced_since')->nullable();
            $table->year('death')->nullable();
            $table->boolean('is_draft')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
