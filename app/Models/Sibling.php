<?php

namespace App\Models;

use App\Enums\GetAmount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sibling extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'birth_year',
        'lastname',
        'firstname',
        'education',
        'graduation_year',
        'place_of_residence',
        'get_amount',
        'support_site',
        'is_draft',
    ];

    protected $casts = [
       'get_amount' => GetAmount::class,
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
