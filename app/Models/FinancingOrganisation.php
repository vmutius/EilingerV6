<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancingOrganisation extends Model
{
    protected $connection = 'mysql';

    protected $fillable = [
        'user_id',
        'application_id',
        'financing_name',
        'financing_amount',
        'is_draft',
    ];
}
