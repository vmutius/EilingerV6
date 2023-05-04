<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnclosuresTable extends Migration
{
    public function up()
    {
        Schema::create('enclosures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->onDelete('cascade');
            $table->text('remark')->nullable();
            $table->string('passport')->nullable();
            $table->string('cv')->nullable();
            $table->string('apprenticeship_contract')->nullable();
            $table->string('diploma')->nullable();
            $table->string('divorce')->nullable();
            $table->string('rental_contract')->nullable();
            $table->string('certificate_of_study')->nullable();
            $table->string('tax_assessment')->nullable();
            $table->string('expense_receipts')->nullable();
            $table->string('partner_tax_assessment')->nullable();
            $table->string('supplementary_services')->nullable();
            $table->string('ects_points')->nullable();
            $table->string('parents_tax_factors')->nullable();
            $table->boolean('is_draft')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enclosures');
    }
}
