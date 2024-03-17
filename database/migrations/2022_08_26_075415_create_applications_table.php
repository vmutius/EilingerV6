<?php

use App\Enums\ApplStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('appl_status')->default(ApplStatus::NOTSEND->value);
            $table->string('bereich');
            $table->string('form');
            $table->date('start_appl')->nullable();
            $table->date('end_appl')->nullable();
            $table->longText('comment');
            $table->longText('reason');
            $table->decimal('calc_amount', $precision = 19, $scale = 2)->nullable();
            $table->decimal('req_amount', $precision = 19, $scale = 2)->nullable();
            $table->string('payout_plan')->nullable();
            $table->foreignId('currency_id')->constrained();
            $table->boolean('is_first')->default(true);
            $table->foreignId('main_application_id')->nullable()->constrained('applications'); // Link zum Erst Antrag, wenn dies ein Folge Antrag ist
            $table->string('reason_rejected')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
