<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'appl_status',
        'bereich'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
       public function user()
    {
        return $this->belongsTo(User::class);
    }
}
