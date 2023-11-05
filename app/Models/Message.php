<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'application_id',
        'user_id',
        'body',
        'main_message_id',
        'isInternal',
    ];

    public function replies()
    {
        return $this->hasMany(Message::class, 'main_message_id')->oldest();
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function isMainMessage()
    {
        return is_null($this->main_message_id);
    }

    public function scopeMainMessage(Builder $builder)
    {
        $builder->whereNull('main_message_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
