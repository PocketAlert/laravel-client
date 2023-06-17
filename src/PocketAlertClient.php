<?php

namespace PocketAlert\PocketAlertClient;

use GuzzleHttp\Client;

class PocketAlertClient
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.pocketalert.app/v1/',
        ]);
    }

    public function sendMessage($title, $message, $device_id, $application_id, $token)
    {
        $response = $this->client->post('messages', [
            'headers' => [
                'Authorization' => $token,
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
