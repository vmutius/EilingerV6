<?php

namespace App\Enums;

enum ParentType: string
{
    case mother = 'Mutter';
    case father = 'Vater';

    case stepmother = 'Stiefmutter';
    case stepfather = 'Stiefvater';
}
