<?php



require "vendor/autoload.php";

$access_token = '53y6fgeI+vPQDMSiO7CmuuwWKkT0tCFxMYiG7ni0BdQkqmy02xHxM/stMRC3lh77tSa3Jcocg11orB1sEmF8dsZ82Mg7jUc85+GXyz5K4JrVT3OYVQ0n0UxNdzo6/b/XdlFyinms5VqJ4jAHNRXYjQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '36a850d2b65d5c69838bf4f2abaad5e5';

$pushID = 'U92763d00fc1a27f8c121cbae0c17643c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีครับ นี้เป็นระบบแจ้งเตือน และ ประชาสัมพันธ์ ของโรงพยาบาลนาหม่อม ขอแจ้งว่า ท่านได้มีการนัดเข้ารับการรักษาตัว ในวันที่ 04/09/2561 จึงขอให้ท่านมาตามนัดด้วยค่ะ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







