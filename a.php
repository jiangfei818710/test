<?php
$code = $_GET['code'];
if(empty($code)){
	echo 123;
	exit();
}
$appid = "wx11ee013f1fe0d4f7";
$secret = "c7e197cb050c9841a3a806758d2d1f83";
$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=".$_GET['code']."&grant_type=authorization_code";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
$res = curl_exec ($ch);

curl_close ($ch);
$date = json_decode($res, true);
$openid = $date['openid'];

echo "<script>";
echo "window.location.href='http://www.taocz.com/index.php?app=specact&act=mobile_shengri_get&openid=".$openid."'";
echo "</script>";

?>