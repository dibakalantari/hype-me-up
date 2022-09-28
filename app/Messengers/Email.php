<?php

namespace App\Messengers;

use Illuminate\Support\Facades\Mail;

class Email implements MessengerInterface
{
    public function send(string $text)
    {
        Mail::raw($text,function ($message){
            $message->to(config('receiver.receiver_email'))
            ->subject("Get Ready to feel good");
        });
    }
}
