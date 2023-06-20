<?php

use App\Enums\ApplStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('appl_status')->default(ApplStatus::NOT_SEND->value);
            $table->string('bereich');
            $table->string('form');
            $table->date('start_appl')->nullable();
            $table->date('end_appl')->nullable();
            $table->longText('comment');
            $table->longText('reason');
            $table->decimal('req_amount', $precision = 8, $scale = 2)->nullable();
            $table->boolean('is_first')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
