<?php

namespace App\Models;

use App\Enums\JobType;
use App\Enums\ParentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parents extends Model
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
        'in_ch_since',
        'married_since',
        'separated_since',
        'divorced_since',
        'death',
        'is_draft',
    ];

    protected $casts = [
        'parent_type' => ParentType::class,
        'job_type' => JobType::class,
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
