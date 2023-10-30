<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cost extends Model
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
        'semester_fees',
        'fees',
        'educational_material',
        'excursion',
        'travel_expenses',
        'cost_of_living_with_parents',
        'cost_of_living_alone',
        'cost_of_living_single_parent',
        'cost_of_living_with_partner',
        'number_of_children',
        'is_draft',
        'total_amount_costs',
    ];

    protected $casts = [
        'semester_fees' => 'integer',
        'fees' => 'integer',
        'educational_material' => 'integer',
        'excursion' => 'integer',
        'travel_expenses' => 'integer',
        'cost_of_living_with_parents' => 'integer',
        'cost_of_living_alone' => 'integer',
        'cost_of_living_single_parent' => 'integer',
        'cost_of_living_with_partner' => 'integer',
        'number_of_children' => 'integer',
        'total_amount_costs' => 'integer',
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
