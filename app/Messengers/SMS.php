<?php

namespace App\Messengers;

class SMS implements MessengerInterface
{

    public function send(string $text)
    {
        app('provider')->messages->create(
            config('receiver.receiver_number'),
            array(
                'from' => config('twilio.source_number'),
                'body' => $text
            )
        );
    }
}
