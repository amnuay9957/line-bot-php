<?php


$access_token = 'tCJl30erl0I50K93pJ70Q0u7kLGAqHhF8vyGU80jhDPlqVfkRt8yTZyswqvUfLNpqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYNOwPpzX47seaZryAlxSckWmLcHPbUO5Ub3UeLci9++HgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5587a6bbd2ba4ad83f79f708b3862aaa';

$pushID = 'Uc09e0dd8896d0b9500daa09dcf068081';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
