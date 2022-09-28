<?php

namespace App\Console\Commands;

use App\Enums\Messenger;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SendQuotes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:quote';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will get a quote from php artisan inspire command and send it to specified used randomly via sms, call or email using Twilio';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('inspire');

        $quote = Artisan::output();

        $options = Messenger::cases();
        $todayMessenger = $options[array_rand($options)];

        (new $todayMessenger->value())->send($quote);
    }
}
