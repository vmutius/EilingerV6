<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    public const PARENT_TYPE = [
        'mother' => 'mother',
        'father' => 'father',
        'stepmother' => 'stepmother',
        'stepfather' => 'stepfather'
    ];

    public const JOB_TYPE = [
        'selbstständig' => 'selbstständig',
        'angestellt' => 'angestellt',      
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_type',
        'lastname',
        'firstname',
        'birthday',
        'address',
        'plz_ort',
        'since',
        'job_type',
        'job',
        'employer',
        'inCHsince',
        'marriedSince',
        'separatedSince',
        'divorcedSince',
        'death'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }


}
