<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'application_id',
        'semesterFees',
        'fees',
        'educationalMaterial',
        'excursion', 
        'travelExpenses', 
        'costOfLivingWithParents', 
        'costOfLivingAlone',
        'costOfLivingSingleParent',
        'costOfLivingWithPartner',
        'numberOfChildren'
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
