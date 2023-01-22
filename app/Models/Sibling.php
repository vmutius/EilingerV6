<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    use HasFactory;
    protected $connection = "mysql";

    public const GETAMOUNT = [
        true => 'Ja',
        false => 'Nein',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'birth_year',
        'lastname',
        'firstname', 
        'education', 
        'graduation_year',
        'placeOfResidence',
        'getAmount',
        'supportSite'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
