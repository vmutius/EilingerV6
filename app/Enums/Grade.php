<?php

namespace App\Enums;

enum Grade: string
{
    case Bachelor = 'Bachelor';
    case Master = 'Master';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
