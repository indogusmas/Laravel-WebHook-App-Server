<?php

namespace App\Providers;

use Spatie\WebhookServer\Events\WebhookCallSucceededEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class WebhookCallSucceededEventHandler
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WebhookCallSucceededEvent $event): void
    {
        Log::info('Webhook Successfully ');
    }
}
