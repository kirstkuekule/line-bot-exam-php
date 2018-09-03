<?php


$access_token = '53y6fgeI+vPQDMSiO7CmuuwWKkT0tCFxMYiG7ni0BdQkqmy02xHxM/stMRC3lh77tSa3Jcocg11orB1sEmF8dsZ82Mg7jUc85+GXyz5K4JrVT3OYVQ0n0UxNdzo6/b/XdlFyinms5VqJ4jAHNRXYjQdB04t89/1O/w1cDnyilFU=';

$userId = 'U22a1bc9ee7d5c54e4655eb954b170398';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

