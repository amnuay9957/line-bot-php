<?php
$access_token = 'xUro+ij5u2IRlsMYixSTPlJFSgQmChWv5g+VYWNz7M2VbIEjXrFaG+9LdKbhiUwKqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYNscEtgRUX3/GV7dwr3daev/0/A2zT0C8EwDnKD62RgGQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
