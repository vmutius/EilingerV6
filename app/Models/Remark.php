<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }
}
