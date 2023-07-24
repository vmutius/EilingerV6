<?php

namespace App\Models;

use App\Enums\Form;
use App\Enums\Bereich;
use App\Enums\ApplStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'appl_status',
        'bereich',
        'appl_status',
        'form',
        'reason',
        'is_first',
        'req_amount',
        'calc_amount',
        'currency_id',
        'main_application_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function getApplStatusContextAttribute($key)
    {
        return [
            ApplStatus::PENDING->value => 'warning', // Antrag liegt bei Eilinger zur Bearbeitung
            ApplStatus::WAITING->value => 'info', //Antrag liegt wieder beim Benutzer zur Beantwortung der Fragen
            ApplStatus::COMPLETE->value => 'dark', //Angaben im Antrag vollständig. Wartet auf nächste Stiftungsratssitzung
            ApplStatus::APPROVED->value => 'success',
            ApplStatus::BLOCKED->value => 'danger',
        ][$this->appl_status->value] ?? 'gray'; 
    }

    protected $casts = [
        'appl_status' => ApplStatus::class,
        'bereich' => Bereich::class,
        'form' => Form::class,
    ];
}
