<?php

namespace App\Enums;

enum Bewilligung: string
{
    case C = 'Ausweis C EU/EFTA';
    case B = 'Ausweis B EU/EFTA';
    case I = 'Ausweis Ci EU/EFTA';
    case G = 'Ausweis G EU/EFTA';
    case L = 'Ausweis L EU/EFTA';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
