<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    public function up(): void
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('lastname', 255);
            $table->string('firstname', 255);
            $table->date('birthday');
            $table->boolean('is_draft')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('children');
    }
}
