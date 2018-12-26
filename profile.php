<?php


$access_token = 'tCJl30erl0I50K93pJ70Q0u7kLGAqHhF8vyGU80jhDPlqVfkRt8yTZyswqvUfLNpqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYNOwPpzX47seaZryAlxSckWmLcHPbUO5Ub3UeLci9++HgdB04t89/1O/w1cDnyilFU=';

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


    $access_token = 'tCJl30erl0I50K93pJ70Q0u7kLGAqHhF8vyGU80jhDPlqVfkRt8yTZyswqvUfLNpqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYNOwPpzX47seaZryAlxSckWmLcHPbUO5Ub3UeLci9++HgdB04t89/1O/w1cDnyilFU=';//copy Channel access token ตอนที่ตั้งค่ามาใส่

    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);

    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";

    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Sticker"
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        replyMsg($arrayHeader,$arrayPostData);
    }
