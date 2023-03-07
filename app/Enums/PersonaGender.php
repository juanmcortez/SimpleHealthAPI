<?php

namespace App\Enums;

enum PersonaGender: string
{
    case Male           = 'MALE';
    case Female         = 'FEMA';
    case Undisclosed    = 'UNDI';
    case None           = '';
}
