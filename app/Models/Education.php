<?php

namespace App\Models;

use App\Enums\Grade;
use App\Enums\Time;
use App\Enums\InitialEducation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'educations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'application_id',
        'education',
        'name',
        'final',
        'grade',
        'ects_points',
        'time',
        'begin_edu',
        'duration_edu',
        'start_semester',
        'initial_education',
        'is_draft',
    ];

    protected $casts = [
        'education' => \App\Enums\Education::class,
        'grade' => Grade::class,
        'time' => Time::class,
        'inital_education' => InitialEducation::class,
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
