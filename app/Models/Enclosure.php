<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enclosure extends Model
{
    use HasFactory;

    protected $fillable = [
        'hasID',
        'hasCV',
        'hasApprenticeshipContract',
        'hasDiploma',
        'hasDivorce',
        'hasRentalContract',
        'hasCertificateOfStudy',
        'hasTaxAssessment',
        'hasExpenseReceipts',
        'hasPartnerTaxAssessment',
        'hasSupplementaryServices',
        'hasECTSPoints',
        'hasParentsTaxFactors'
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
