<?php
namespace App\Notifications\Channels;

use Illuminate\Notifications\Notification;
use JPush\Client;

class JPushChannel
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function send($notifiable, Notification $notification)
    {
        $notification->toPush($notifiable, $this->client->push()->send());
    }
}
