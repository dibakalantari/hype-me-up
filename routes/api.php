<?php

use App\Http\Middleware\TwilioWebhookMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Twilio\TwiML\VoiceResponse;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(TwilioWebhookMiddleware::class)->post('/get-call-text', function (Request $request, VoiceResponse $voiceResponse) {
    $voiceResponse->say($request->text);

    echo $voiceResponse;
})->name('call.text');
