<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enclosure extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'application_id',
        'passport',
        'passportSendLater',
        'cv',
        'cvSendLater',
        'apprenticeship_contract',
        'apprenticeshipContractSendLater',
        'diploma',
        'diplomaSendLater',
        'divorce',
        'divorceSendLater',
        'rental_contract',
        'rentalContractSendLater',
        'certificate_of_study',
        'certificateOfStudySendLater',
        'tax_assessment',
        'taxAssessmentSendLater',
        'expense_receipts',
        'expenseReceiptsSendLater',
        'partner_tax_assessment',
        'partnerTaxAssessmentSendLater',
        'supplementary_services',
        'supplementaryServicesSendLater',
        'ects_points',
        'ectsPointsSendLater',
        'parents_tax_factors',
        'parentsTaxFactorsSendLater',
        'activity',
        'activitySendLater',
        'activity_report',
        'activityReportSendLater',
        'balance_sheet',
        'balanceSheetSendLater',
        'cost_receipts',
        'costReceiptsSendLater',
        'open_invoice',
        'openInvoiceSendLater',
        'commercial_register_extract',
        'commercialRegisterExtractSendLater',
        'statute',
        'statuteSendLater',
        'is_draft',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
