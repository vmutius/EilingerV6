<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'user_id',
        'body',
        'main_message_id',
        'isInternal'
    ];

    public function scopeMain(Builder $builder)
    {
        $builder->WhereNull('main_message_id');
    }

    public function replies()
    {
        return $this->hasMany(Message::class, 'main_message_id')->oldest();
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
