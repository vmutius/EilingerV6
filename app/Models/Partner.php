<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'lastname',
        'firstname',
        'birthday',
        'profession',
        'begin',
        'end',
        'is_draft',
    ];

    protected $casts = [
        'birthday' => 'date',
    ];

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
