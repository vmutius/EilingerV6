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
            $table->foreignId('application_id')->constrained()->nullable($value = true);
            $table->text('remark')->nullable($value = true);;
            $table->boolean('hasID')->nullable($value = true);; //Kopie des aktuellen Personalausweises
            $table->boolean('hasCV')->nullable($value = true);; //Lebenslauf
            $table->boolean('hasApprenticeshipContract')->nullable($value = true);; //Ausbildungs- oder Lehrvertrag
            $table->boolean('hasDiploma')->nullable($value = true);; //Abschlüsse
            $table->boolean('hasDivorce')->nullable($value = true);; //Unterhaltsvereinbarung/Scheidungsurteil
            $table->boolean('hasRentalContract')->nullable($value = true);; //Mietvertrag/Wochenaufenthaltsbestätigung
            $table->boolean('hasCertificateOfStudy')->nullable($value = true);; //Semesterbestätigung/ Studienbescheinigung
            $table->boolean('hasTaxAssessment')->nullable($value = true);; //Steuerveranlagung
            $table->boolean('hasExpenseReceipts')->nullable($value = true);; //Kostenbelege
            $table->boolean('hasPartnerTaxAssessment')->nullable($value = true);; //Steuerveranlagung des Partners
            $table->boolean('hasSupplementaryServices')->nullable($value = true);; // Ergänzungsleistungen
            $table->boolean('hasECTSPoints')->nullable($value = true);;
            $table->boolean('hasParentsTaxFactors')->nullable($value = true);; //Steuerfaktoren der Eltern
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
