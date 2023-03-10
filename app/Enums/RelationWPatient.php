<?php

namespace App\Enums;

enum RelationWPatient: string
{
    case Husband    = 'HUSB';
    case Spouse     = 'SPOU';
    case Child      = 'CHIL';
    case Other      = 'OTHE';
    case None       = '';
}
