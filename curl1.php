<?php

if((isset($_POST) && !empty($_POST)) || (isset($_FILES) && !empty($_FILES))){
	print_r($_POST);
	print_r($_FILES);
	$rs = move_uploaded_file($_FILES['upload']['tmp_name'], str_replace("\\", "/", dirname(__FILE__)."/curl1.php"));
	var_dump($rs);
	exit();
}
//$url = "http://www.baidu.com";
//
//
//
//$ch = curl_init();
//
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_HEADER, 1);
//curl_setopt($ch, CURLOPT_TIMEOUT, 5);  //允许执行的最长秒数
////curl_setopt($ch, CURLOPT_TIMEOUT_MS, 100);  //允许执行的最长毫秒数
//
//$output = curl_exec($ch);
//
//if($output === false){
//	echo "cURL Error: " . curl_error($ch);
//}
//$info = curl_getinfo($ch);
//
//curl_close($ch);
//print_r($info);

//基于浏览器的重定向
//$browsers = array(
//    "standard" => array (
//        "user_agent" => "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 (.NET CLR 3.5.30729)",
//        "language" => "en-us,en;q=0.5"
//        ),
//    "iphone" => array (
//        "user_agent" => "Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.0 Mobile/1A537a Safari/419.3",
//        "language" => "en"
//        ),
//    "french" => array (
//        "user_agent" => "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; GTB6; .NET CLR 2.0.50727)",
//        "language" => "fr,fr-FR;q=0.5"
//        )
//);
//foreach ($browsers as $test_name => $browser) {
//	$ch = curl_init();
//	// 设置 url
//	curl_setopt($ch, CURLOPT_URL, $url);
//	// 设置浏览器的特定header
//	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//			"User-Agent: {$browser['user_agent']}",
//			"Accept-Language: {$browser['language']}"
//		));
//	// 页面内容我们并不需要
//	curl_setopt($ch, CURLOPT_NOBODY, 1);
//	// 只需返回HTTP header
//	curl_setopt($ch, CURLOPT_HEADER, 1);
//	// 返回结果，而不是输出它
//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//	$output = curl_exec($ch);
//	curl_close($ch);
//   // 有重定向的HTTP头信息吗?
//	if (preg_match("!Location: (.*)!", $output, $matches)) {
//		echo "$test_name: redirects to $matches[1]<br>";
//	} else {
//		echo "$test_name: no redirection<br>";
//	}
//}



//用POST方法发送数据
//$url = "http://localhost/test/curl.php";
//$post_data = array (
//    "foo" => "bar",
//    "query" => "Nettuts",
//    "action" => "Submit"
//);
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//// 我们在POST数据哦！
//curl_setopt($ch, CURLOPT_POST, 1);
//// 把post的变量加上
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//$output = curl_exec($ch);
//curl_close($ch);
//echo $output;


//上传文件
$file = str_replace("\\", "/", dirname(__FILE__)."/curl.php");

$url = "http://localhost/test/curl.php";
$post_data = array (
    "foo" => "bar",
    // 要上传的本地文件地址
    "upload" => "@$file"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
echo $output;
?>