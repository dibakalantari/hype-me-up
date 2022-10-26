<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Twilio\Security\RequestValidator;

class TwilioWebhookMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $requestValidator = new RequestValidator(config('twilio.auth_token'));

        $requestData = $request->post();

        if (array_key_exists('bodySHA256', $requestData)) {
            $requestData = $request->getContent();
        }

        $isValid = $requestValidator->validate(
            $request->header('X-Twilio-Signature'),
            $request->fullUrl(),
            $requestData
        );

        if ($isValid) {
            return $next($request);
        }

        abort(401, 'You are not Twilio!');
    }
}
