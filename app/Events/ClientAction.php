<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Models\Client;

class ClientAction
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $client;
    private $action;

    /**
     * Create a new event instance.
     * ClientAction constructor.
     * @param Client $client
     * @param $action
     */
    public function __construct(Client $client, $action)
    {
        $this->client = $client;
        $this->action = $action;
    }

    public function getClient()
    {
        return $this->client;
    }
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
