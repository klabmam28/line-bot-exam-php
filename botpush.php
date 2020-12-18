<?php



require "vendor/autoload.php";

$access_token = '1655390906';

$channelSecret = '70c5bcb53fea7e79e77f95e7b2d74ae5';

$pushID = 'U1ed9525035795b656daee02c60a19804';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







