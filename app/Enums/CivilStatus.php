<?php

namespace App\Enums;

enum CivilStatus: string
{
    case LEDIG ='ledig';
    case VERHEIRATET = 'verheiratet';
    case GESCHIEDEN = 'geschieden';
    case VERWITWET = 'verwitwet';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
