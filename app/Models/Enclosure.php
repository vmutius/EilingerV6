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
