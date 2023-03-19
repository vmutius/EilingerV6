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
    ];

    public const STATUS = [
        'draft' => 'draft',
        'complete' => 'complete',
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
