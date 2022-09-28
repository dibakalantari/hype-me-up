<?php

namespace App\Messengers;

interface MessengerInterface
{
    public function send(string $text);
}
