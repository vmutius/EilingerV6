<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enclosure extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'application_id',
        'has_id',
        'has_cv',
        'has_apprenticeship_contract',
        'has_diploma',
        'has_divorce',
        'has_rental_contract',
        'has_certificate_of_study',
        'has_tax_assessment',
        'has_expense_receipts',
        'has_partner_tax_assessment',
        'has_supplementary_services',
        'has_ects_points',
        'has_parents_tax_factors',
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
