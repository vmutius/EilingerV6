<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
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
        'I' => 'Ausweis Ci EU/EFTA',
        'G' => 'Ausweis G EU/EFTA',
        'L' => 'Ausweis L EU/EFTA',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
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
        return $this->hasMany(Address::class);
    }

    public function siblings() 
    {
        return $this->hasMany(Sibling::class);
    }

    public function lastLogin()
    {
        return $this->belongsTo(Login::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function avatar()
    {
        return 'https://www.gravatar.com/avatar' . md5($this->email) . '?s=80&d=mp';
    }
}
