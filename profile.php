<?php


$access_token = 'Uajd2eGu+VGwkqEXveuuJmMkgllDLG+cZ7zcPOPYhoHEHO6rrTa6dg5BkQtIdKTPTl9bsZ1VFkJFDeufD0jq7Z8R+Emx39n2BNqSG+s4tsBIce70Z0OedpDl1lL3lscWjYHVXFMiwR6oLRAgvHwbmAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

