<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enclosure extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'application_id',
        'passport',
        'cv',
        'apprenticeship_contract',
        'diploma',
        'divorce',
        'rental_contract',
        'certificate_of_study',
        'tax_assessment',
        'expense_receipts',
        'partner_tax_assessment',
        'supplementary_services',
        'ects_points',
        'parents_tax_factors',
        'activity',
        'activity_report',
        'balance_sheet',
        'cost_receipts',
        'open_invoice',
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
