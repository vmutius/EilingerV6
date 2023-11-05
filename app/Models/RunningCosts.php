<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RunningCosts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'running_costs_name',
        'running_costs_amount',
    ];
}
