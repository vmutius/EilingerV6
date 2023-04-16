<?php

namespace App\Enums;

enum PayoutPlan: string
{
    case monthly = 'monatlich';
    case oneTime = 'Einmalig';
}
