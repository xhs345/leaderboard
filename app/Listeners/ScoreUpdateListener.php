<?php

namespace App\Listeners;

use App\Events\ScoreUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ScoreUpdateListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ScoreUpdated $event
     * @return void
     */
    public function handle(ScoreUpdated $event)
    {
        //
    }
}
