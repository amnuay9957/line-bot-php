<?php
$access_token = 'tCJl30erl0I50K93pJ70Q0u7kLGAqHhF8vyGU80jhDPlqVfkRt8yTZyswqvUfLNpqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYNOwPpzX47seaZryAlxSckWmLcHPbUO5Ub3UeLci9++HgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v2/bot/profile/';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
