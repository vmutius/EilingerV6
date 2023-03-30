<?php

namespace App\Enums;

enum Types: string
{
    case nat = 'nat';
    case jur = 'jur';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}