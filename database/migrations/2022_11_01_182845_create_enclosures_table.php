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
            $table->boolean('passportSendLater')->default(false);
            $table->string('cv')->nullable();
            $table->boolean('cvSendLater')->default(false);
            $table->string('apprenticeship_contract')->nullable();
            $table->boolean('apprenticeshipContractSendLater')->default(false);
            $table->string('diploma')->nullable();
            $table->boolean('diplomaSendLater')->default(false);
            $table->string('divorce')->nullable();
            $table->boolean('divorceSendLater')->default(false);
            $table->string('rental_contract')->nullable();
            $table->boolean('rentalContractSendLater')->default(false);
            $table->string('certificate_of_study')->nullable();
            $table->boolean('certificateOfStudySendLater')->default(false);
            $table->string('tax_assessment')->nullable();
            $table->boolean('taxAssessmentSendLater')->default(false);
            $table->string('expense_receipts')->nullable();
            $table->boolean('expenseReceiptsSendLater')->default(false);
            $table->string('partner_tax_assessment')->nullable();
            $table->boolean('partnerTaxAssessmentSendLater')->default(false);
            $table->string('supplementary_services')->nullable();
            $table->boolean('SupplementaryServicesSendLater')->default(false);
            $table->string('ects_points')->nullable();
            $table->boolean('ectsPointsSendLater')->default(false);
            $table->string('parents_tax_factors')->nullable();
            $table->boolean('parentsTaxFactorsSendLater')->default(false);
            $table->string('activity')->nullable();
            $table->boolean('activitySendLater')->default(false);
            $table->string('activity_report')->nullable();
            $table->boolean('activityReportSendLater')->default(false);
            $table->string('balance_sheet')->nullable();
            $table->boolean('balanceSheetSendLater')->default(false);
            $table->string('cost_receipts')->nullable();
            $table->boolean('costReceiptsSendLater')->default(false);
            $table->string('open_invoice')->nullable();
            $table->boolean('openInvoiceSendLater')->default(false);
            $table->string('commercial_register_extract')->nullable();
            $table->boolean('commercialRegisterExtractSendLater')->default(false);
            $table->string('statute')->nullable();
            $table->boolean('statuteSendLater')->default(false);
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
