<?php

namespace App\Enums;

enum Education: string
{
    case Matura = 'Matura';
    case FMS = 'FMS';
    case Berufslehre = 'Berufslehre';
    case BM2 = 'BM2';
    case Fachschule = 'Fachschule';
    case Fachhochschule = 'Fachhochschule';
    case Universitaet = 'Universität';
}
