<?php

namespace App\Enums;

enum Salutation: string
{
    case Herr = 'Herr';
    case Frau = 'Frau';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}