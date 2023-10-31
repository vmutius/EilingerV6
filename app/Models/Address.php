<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';

    protected $fillable = [
        'user_id',
        'country_id',
        'street',
        'number',
        'plz',
        'town',
        'since',
        'is_wochenaufenthalt',
        'is_draft',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function scopeLoggedInUser($query)
    {
        return $query->where('user_id', auth()->user()->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
