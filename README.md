# PocketAlertClient

A Laravel package to send messages to [PocketAlert](https://pocketalert.app/) API

## Installation

You can install the package via composer:

```bash
composer require pocketalert/laravel-client
```

## Usage

``` php
use PocketAlert\PocketAlertClient\PocketAlertClient;

$pocketAlert = new PocketAlertClient('YOUR_TOKEN');
$pocketAlert->sendMessage('Title', 'Message', 'DeviceID', 'ApplicationID');
```
