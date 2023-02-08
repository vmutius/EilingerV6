<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public const APPL_STATUS = [
        'not_send' => 'not_send',
        'approved' => 'approved',
        'pending' => 'pending',
        'waiting' => 'waiting',
        'blocked' =>'blocked'
    ];

    public const BEREICH = [
        'Bildung' => 'Bildung',
        'Menschen' => 'Menschen',
        'Tierschutz' => 'Tierschutz',
        'Umwelt' => 'Umwelt'
    ];

    protected $fillable = [
        'user_id',
        'name',
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
