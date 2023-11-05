<?php

namespace App\Enums;

enum CivilStatus: string
{
    case ledig = 'ledig';
    case verheiratet = 'verheiratet';
    case geschieden = 'geschieden';
    case verwitwet = 'verwitwet';
}
