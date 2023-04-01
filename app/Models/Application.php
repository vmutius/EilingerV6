<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ApplStatus;

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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function getApplStatusContextAttribute()
    {
        return [
            ApplStatus::PENDING => 'warning', // Antrag liegt bei Eilinger zur Bearbeitung
            ApplStatus::WAITING => 'info', //Antrag liegt wieder beim Benutzer zur Beantwortung der Fragen
            ApplStatus::COMPLETE => 'dark', //Angaben im Antrag vollständig. Wartet auf nächste Stiftungsratssitzung
            ApplStatus::APPROVED => 'success',
            ApplStatus::BLOCKED => 'danger',
        ][$this->appl_status] ?? 'gray'; 
    }

    protected $casts = [
        'appl_status' => ApplStatus::class,
    ];
}
