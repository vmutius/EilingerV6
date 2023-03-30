<?php

namespace App\Enums;

enum Bereich: string
{
    case Bildung ='Bildung';
    case Menschen = 'Menschen';
    case Tierschutz = 'Tierschutz';
    case Umwelt = 'Umwelt';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
