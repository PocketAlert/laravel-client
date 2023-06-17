<?php

namespace PocketAlert\PocketAlertClient;

use GuzzleHttp\Client;

class PocketAlertClient
{
    protected $client;
    protected $token;

    public function __construct($token)
    {
        $this->client = new Client([
            'base_uri' => 'https://api.pocketalert.app/v1/',
        ]);

        $this->token = $token;
    }

    public function sendMessage($title, $message, $device_id = null, $application_id = null)
    {
        $response = $this->client->post('messages', [
            'headers' => [
                'Authorization' => $this->token,
            ],
            'json' => [
                'title' => $title,
                'message' => $message,
                'device_id' => $device_id,
                'application_id' => $application_id,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
