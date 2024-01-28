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
            $table->boolean('passportSendLater')->default(false)->nullable();
            $table->string('cv')->nullable();
            $table->boolean('cvSendLater')->default(false)->nullable();
            $table->string('apprenticeship_contract')->nullable();
            $table->boolean('apprenticeshipContractSendLater')->default(false)->nullable();
            $table->string('diploma')->nullable();
            $table->boolean('diplomaSendLater')->default(false)->nullable();
            $table->string('divorce')->nullable();
            $table->boolean('divorceSendLater')->default(false)->nullable();
            $table->string('rental_contract')->nullable();
            $table->boolean('rentalContractSendLater')->default(false)->nullable();
            $table->string('certificate_of_study')->nullable();
            $table->boolean('certificateOfStudySendLater')->default(false)->nullable();
            $table->string('tax_assessment')->nullable();
            $table->boolean('taxAssessmentSendLater')->default(false)->nullable();
            $table->string('expense_receipts')->nullable();
            $table->boolean('expenseReceiptsSendLater')->default(false)->nullable();
            $table->string('partner_tax_assessment')->nullable();
            $table->boolean('partnerTaxAssessmentSendLater')->default(false)->nullable();
            $table->string('supplementary_services')->nullable();
            $table->boolean('supplementaryServicesSendLater')->default(false)->nullable();
            $table->string('ects_points')->nullable();
            $table->boolean('ectsPointsSendLater')->default(false)->nullable();
            $table->string('parents_tax_factors')->nullable();
            $table->boolean('parentsTaxFactorsSendLater')->default(false)->nullable();
            $table->string('activity')->nullable();
            $table->boolean('activitySendLater')->default(false)->nullable();
            $table->string('activity_report')->nullable();
            $table->boolean('activityReportSendLater')->default(false)->nullable();
            $table->string('balance_sheet')->nullable();
            $table->boolean('balanceSheetSendLater')->default(false)->nullable();
            $table->string('cost_receipts')->nullable();
            $table->boolean('costReceiptsSendLater')->default(false)->nullable();
            $table->string('open_invoice')->nullable();
            $table->boolean('openInvoiceSendLater')->default(false)->nullable();
            $table->string('commercial_register_extract')->nullable();
            $table->boolean('commercialRegisterExtractSendLater')->default(false)->nullable();
            $table->string('statute')->nullable();
            $table->boolean('statuteSendLater')->default(false)->nullable();
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
