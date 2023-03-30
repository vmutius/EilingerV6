<?php

namespace App\Enums;

enum Form: string
{
    case Stipendium = 'Stipendium';
    case Darlehen = 'Darlehen';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
