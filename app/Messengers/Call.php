<?php

namespace App\Messengers;

use Twilio\Rest\Client;
use Twilio\TwiML\VoiceResponse;

class Call implements MessengerInterface
{
    public function send(string $text)
    {
        (app('provider'))->calls->create(
            config('receiver.receiver_number'),
            config('twilio.source_number'),
            [
                "url" => route('call.text', [
                    'text' => urlencode($text)
                ])
            ]
        );
    }
}
