<?php



require "vendor/autoload.php";

$access_token = 'Xk666yclu4KhQdp+3QIv8PNf2fNAN2z12dKJyZaqNgCjT7xejglCz1YFxdSb52IdKD62vPkKJdI2FiPWP6Rvb+ePo4+GYuhEliV4pYI0mB5jJf0EjVJhPIxD2k9z6GpWrFleBFfZYTEQNHGHV4GiVgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '724f47bb58a742878692026c421b345a';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







