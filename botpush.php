<?php



require "vendor/autoload.php";

$access_token = 'Uajd2eGu+VGwkqEXveuuJmMkgllDLG+cZ7zcPOPYhoHEHO6rrTa6dg5BkQtIdKTPTl9bsZ1VFkJFDeufD0jq7Z8R+Emx39n2BNqSG+s4tsBIce70Z0OedpDl1lL3lscWjYHVXFMiwR6oLRAgvHwbmAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'ae802ed28d87f119a30bbf8b15e84bb9';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







