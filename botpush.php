<?php


$access_token = 'xUro+ij5u2IRlsMYixSTPlJFSgQmChWv5g+VYWNz7M2VbIEjXrFaG+9LdKbhiUwKqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYNscEtgRUX3/GV7dwr3daev/0/A2zT0C8EwDnKD62RgGQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5587a6bbd2ba4ad83f79f708b3862aaa';

$pushID = 'Uc09e0dd8896d0b9500daa09dcf068081';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
