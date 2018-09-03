<?php



require "vendor/autoload.php";

$access_token = 'Xk666yclu4KhQdp+3QIv8PNf2fNAN2z12dKJyZaqNgCjT7xejglCz1YFxdSb52IdKD62vPkKJdI2FiPWP6Rvb+ePo4+GYuhEliV4pYI0mB5jJf0EjVJhPIxD2k9z6GpWrFleBFfZYTEQNHGHV4GiVgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '724f47bb58a742878692026c421b345a';

$pushID = 'U92763d00fc1a27f8c121cbae0c17643c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีครับ นี้เป็นระบบแจ้งเตือน และ ประชาสัมพันธ์ ของโรงพยาบาลนาหม่อม ขอแจ้งว่า ท่านได้มีการนัดเข้ารับการรักษาตัว ในวันที่ 04/09/2561 จึงขอให้ท่านมาตามนัดด้วยค่ะ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







