<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'user_id',
        'body',
        'mainmessage_id'
    ];

    public function scopeMain (Builder $builder)
    {
        $builder->WhereNull('mainmessage_id');
    }

    public function replies()
    {
        return $this->hasMany(Message::class, 'mainmessage_id')->oldest();
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
