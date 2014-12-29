<?php  
//城市天气预报
$url='http://m.weather.com.cn/data/101190302.html';
$w=curl($url);
$weather=json_decode($w, true);
//print_r($weather);
$info=$weather['weatherinfo'];

echo $info['date_y'].','.$info['week'].'。'.$info['city'], "<br>";
echo '今天气温：'.$info['temp1'], "<br>";
echo '天气：'.$info['weather1'].'有'.$info['wind1'].',风力：'.$info['fx1'], "<br>";
echo '穿衣建议：'.$info['index_d'].$info['index48_d'];



 function curl($url, $postFields = null)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FAILONERROR, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//https 请求
if(strlen($url) > 5 && strtolower(substr($url,0,5)) == "https" ) {
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
}
 
if (is_array($postFields) && 0 < count($postFields))
{
$postBodyString = "";
$postMultipart = false;
foreach ($postFields as $k => $v)
{
if("@" != substr($v, 0, 1))//判断是不是文件上传
{
$postBodyString .= "$k=" . urlencode($v) . "&"; 
}
else//文件上传用multipart/form-data，否则用www-form-urlencoded
{
$postMultipart = true;
}
}
unset($k, $v);
curl_setopt($ch, CURLOPT_POST, true);
if ($postMultipart)
{
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
}
else
{
curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
}
}
$reponse = curl_exec($ch);
 
if (curl_errno($ch))
{
throw new Exception(curl_error($ch),0);
}
else
{
$httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if (200 !== $httpStatusCode)
{
throw new Exception($reponse,$httpStatusCode);
}
}
curl_close($ch);
return $reponse;
}

?>