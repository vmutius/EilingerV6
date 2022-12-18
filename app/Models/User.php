<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public const TYPES = [
        'nat' => 'nat',
        'jur' => 'jur'
    ];

    public const SALUTATION = [
        'Herr' => 'Herr',
        'Frau' => 'Frau'
    ];

    public const CIVIL_STATUS = [
        'ledig'         => 'ledig',
        'verheiratet'   => 'verheiratet',
        'geschieden'    => 'geschieden',
        'verwitwet'     => 'verwitwet'
    ];

    public const BEWILLIGUNG = [
        'C' => 'Ausweis C EU/EFTA',
        'B' => 'Ausweis B EU/EFTA',
        'Ci'=> 'Ausweis Ci EU/EFTA',
        'G' => 'Ausweis G EU/EFTA',
        'L' => 'Ausweis L EU/EFTA',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'type',
        'salutation',
        'lastname',
        'firstname',
        'birthday',
        'nationality',
        'telefon',
        'email',
        'password',
        'nameInst',
        'emailInst',
        'telefonInst',
        'website',
        'mobile',
        'sozVersNr',
        'civilStatus',
        'status',
        'inCHsince',
        'bewilligung'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function nationality()
    {
        return $this->belongsTo(Country::class, 'nationality');
    }

    public function address() 
    {
        return $this->hasMany(Address::class, 'user_id');
    }
}
