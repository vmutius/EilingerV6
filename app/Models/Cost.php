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
        'semester_fees',
        'fees',
        'educational_material',
        'excursion', 
        'travel_expenses', 
        'cost_of_living', 
        'cost_childeren'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
