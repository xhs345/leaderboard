<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ScoreUpdated extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $updated;

    /**
     * Create a new event instance.
     *
     * @param bool $updated
     * @return void
     */
    public function __construct($updated)
    {
        $this->updated = (bool) $updated;
    }

    public function broadcastOn()
    {
        return ['test_channel'];
    }
}