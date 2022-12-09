<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    
    /**
    * Benutzertypen
    * 
    * @var array
    */
    public const TYPES = [
        'nat' => 'nat',
        'jur' => 'jur'
    ];
    
    /**
    * Anreden
    * 
    * @var array
    */
    public const SALUTATION = [
        'Herr' => 'Herr',
        'Frau' => 'Frau'
    ];
    
    /**
    * Zivilstand
    * 
    * @var array
    */
    public const CIVIL_STATUS = [
        'ledig'         => 'ledig',
        'verheiratet'   => 'verheiratet',
        'geschieden'    => 'geschieden',
        'verwitwet'     => 'verwitwet'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'salutation',
        'lastname',
        'firstname',
        'birthday',
        'nationality',
        'telefon',
        'email',
        'password',
        'name_inst',
        'email_inst',
        'telefon_inst',
        'website',
        'mobile',
        'soz_vers_nr',
        'zivilstand',
        'status'
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