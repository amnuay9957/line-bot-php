<?php


$access_token = 'xUro+ij5u2IRlsMYixSTPlJFSgQmChWv5g+VYWNz7M2VbIEjXrFaG+9LdKbhiUwKqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYNscEtgRUX3/GV7dwr3daev/0/A2zT0C8EwDnKD62RgGQdB04t89/1O/w1cDnyilFU=';

$userId = 'Uc09e0dd8896d0b9500daa09dcf068081';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
