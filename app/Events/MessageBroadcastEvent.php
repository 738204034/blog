<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Session;

class MessageBroadcastEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $users;
    public $message = array();
    protected $channel;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($users, $message, $channel)
    {
        $this->users = $users;

        $this->message = array(
            'id'      => $message['id'],
            'title'   => $message['title'],
            'content' => $message['content'],
            'url'     => $message['url'],
            'time'    => date('m-d H:i:s', strtotime($message['created_at']))
        );

        $this->channel = $channel;
    }

    /**
     * Get the channels the event should be broadcast on.
     * 广播到哪个频道
     * @return array
     */
    public function broadcastOn()
    {
        return [$this->channel];
    }

//    public function broadcastWith(){
//        return ['message ' => $this->message ];
//    }
}