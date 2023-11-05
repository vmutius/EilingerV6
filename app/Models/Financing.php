<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Financing extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'application_id',
        'personal_contribution',
        'other_income',
        'income_where',
        'income_who',
        'netto_income',
        'assets',
        'scholarship',
        'required_amount',
        'payout_plan',
        'is_draft',
    ];

    protected $casts = [
        'personal_contribution' => 'integer',
        'other_income' => 'integer',
        'netto_income' => 'integer',
        'assets' => 'integer',
        'scholarship' => 'integer',
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
