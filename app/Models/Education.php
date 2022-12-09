<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    public const EDUCATION = [
        'Matura' => 'Matura', 
        'FMS' => 'FMS',
        'Berufslehre' => 'Berufslehre',
        'BM2' => 'BM2',
        'Fachschule' => 'Fachschule',
        'Fachhochschule' => 'Fachhochschule',
        'Universität' => 'Universität'
    ];

    public const GRADE = [
        'BA' => 'Bachelor',
        'MA' => 'Master'
    ];

    public const TIME = [
        'full' => 'Vollzeit',
        'part' => 'Teilzeit'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'education', 
        'name', 
        'final', 
        'grade', 
        'ects-points',
        'time', 
        'begin_edu',
        'duration_edu',
        'begin_appl',
        'duration_appl'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}