<?php

namespace App\Enums;

enum Messenger: string
{
    case CALL = 'App\Messengers\Call';
    case SMS = 'App\Messengers\SMS';
    case EMAIL = 'App\Messengers\Email';
}
