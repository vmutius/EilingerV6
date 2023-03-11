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
            $table->foreignId('application_id')->nullable()->onDelete('cascade');
            $table->text('remark')->nullable();
            $table->boolean('has_id')->nullable(); //Kopie des aktuellen Personalausweises
            $table->boolean('has_cv')->nullable(); //Lebenslauf
            $table->boolean('has_apprenticeship_contract')->nullable(); //Ausbildungs- oder Lehrvertrag
            $table->boolean('has_diploma')->nullable(); //Abschlüsse
            $table->boolean('has_divorce')->nullable(); //Unterhaltsvereinbarung/Scheidungsurteil
            $table->boolean('has_rental_contract')->nullable(); //Mietvertrag/Wochenaufenthaltsbestätigung
            $table->boolean('has_certificate_of_study')->nullable(); //Semesterbestätigung/ Studienbescheinigung
            $table->boolean('has_tax_assessment')->nullable(); //Steuerveranlagung
            $table->boolean('has_expense_receipts')->nullable(); //Kostenbelege
            $table->boolean('has_partner_tax_assessment')->nullable(); //Steuerveranlagung des Partners
            $table->boolean('has_supplementary_services')->nullable(); // Ergänzungsleistungen
            $table->boolean('has_ects_points')->nullable();
            $table->boolean('has_parents_tax_factors')->nullable(); //Steuerfaktoren der Eltern
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
