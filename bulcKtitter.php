<?php
include('vendor/autoload.php');

$token = "5451471986:AAETX6Y25KbERnXxZMziDIsFReYiU7dJaiU";
use Telegram\Bot\Api;

$telegram = new Api($token);
$result = $telegram->getWebhookUpdates();

$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

$text = null;
$chat_id = -688313705;

$r = sprintf($_GET['msg']); 

$telegram->sendMessage(['chat_id' => $chat_id, 'text' => $r]);