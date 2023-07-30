<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostDarlehen extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $fillable = [
        'user_id',
        'application_id',
        'cost_name',
        'cost_amount',
        'is_draft',
    ];
}
