<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Event;

class ChatMessageWasReceived extends Event implements ShouldBroadcast
{
    use InteractsWithSockets;

    public $chatMessage;
    public $user;

    public function __construct($chatMessage, $user)
    {
        $this->chatMessage = $chatMessage;
        $this->user = $user;
    }

    public function broadcastOn()
    {
        return [
            "chat-room.1"
        ];
    }

}
