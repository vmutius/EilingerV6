<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    public const PARENT_TYPE = [
        'mother' => 'Mutter',
        'father' => 'Vater',
        'stepmother' => 'Stiefmutter',
        'stepfather' => 'Stiefvater'
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
        'death'
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
