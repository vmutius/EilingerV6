<?php

namespace App\Enums;

enum PayoutPlan: string
{
    case monthly = 'Monatlich';
    case oneTime = 'Einmalig';

    case partialAmount = 'Abrufbar in Teilbeträgen';
}
