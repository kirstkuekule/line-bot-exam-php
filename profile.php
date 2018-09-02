<?php


$access_token = 'Xk666yclu4KhQdp+3QIv8PNf2fNAN2z12dKJyZaqNgCjT7xejglCz1YFxdSb52IdKD62vPkKJdI2FiPWP6Rvb+ePo4+GYuhEliV4pYI0mB5jJf0EjVJhPIxD2k9z6GpWrFleBFfZYTEQNHGHV4GiVgdB04t89/1O/w1cDnyilFU=';

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

