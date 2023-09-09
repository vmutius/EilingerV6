<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CostDarlehen extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = "mysql";

    protected $fillable = [
        'user_id',
        'application_id',
        'cost_name',
        'cost_amount',
        'is_draft',
    ];
}
