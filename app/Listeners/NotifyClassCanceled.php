<?php

namespace App\Listeners;

use App\Events\ClassCanceled;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyClassCanceled
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
    public function handle(ClassCanceled $event): void
    {
        $scheduledClass = $event->scheduledClass;
        // We need to check if this event is firing and if the listener is able to get the scheduled class

        // First Log then seconds I can choose from the differnce log types Like ( info, error , and so many such types )
        Log::info($scheduledClass);
    }
}
