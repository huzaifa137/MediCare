<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VideoCallSignal implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $toUserId;
    public $fromUserId;
    public $conversationId;
    public $type; // 'offer', 'answer', 'ice', 'call_initiated'
    public $data;

    public function __construct($toUserId, $fromUserId, $conversationId, $type, $data)
    {
        $this->toUserId = $toUserId;
        $this->fromUserId = $fromUserId;
        $this->conversationId = $conversationId;
        $this->type = $type;
        $this->data = $data;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('user.' . $this->toUserId);
    }

    public function broadcastWith()
    {
        return [
            'from_user' => $this->fromUserId,
            'conversation_id' => $this->conversationId,
            'type' => $this->type,
            'data' => $this->data
        ];
    }
}
