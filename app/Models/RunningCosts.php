<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RunningCosts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'running_costs_name',
        'running_costs_amount',
    ];
}
