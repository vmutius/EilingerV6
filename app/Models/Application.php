<?php

namespace App\Models;

use App\Enums\Form;
use App\Enums\Bereich;
use App\Models\Currency;
use App\Enums\ApplStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

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
        'main_application_id',
        'start_appl',
        'end_appl',
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
            ApplStatus::NOT_SEND->value => 'secondary',
        ][$this->appl_status->value] ?? 'gray'; 
    }

    protected $casts = [
        'appl_status' => ApplStatus::class,
        'bereich' => Bereich::class,
        'form' => Form::class,
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
