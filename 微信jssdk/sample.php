<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxb959b9317dd0b640", "41b38fa3cbd209b713dd91764666379e");
$jsoncallback = $_GET['jsoncallback'];
$url1 = $_GET['url1'];
$signPackage = $jssdk->GetSignPackage($url1);

echo $jsoncallback . '(' . json_encode($signPackage) . ')';
?>
