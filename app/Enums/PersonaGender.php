<?php

namespace App\Enums;

enum PersonaGender: string
{
    case Male           = 'male';
    case Female         = 'female';
    case Undisclosed    = 'undisclosed';
    case None           = '';
}
