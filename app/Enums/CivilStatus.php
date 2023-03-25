<?php

namespace App\Enums;

enum CivilStatus: string
{
    case ledig ='ledig';
    case verheiratet = 'verheiratet';
    case geschieden = 'geschieden';
    case verwitwet = 'verwitwet';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
