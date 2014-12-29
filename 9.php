<?
$a = "abc";
$address = '宝龙城市广场1幢101室';
    	$cityid = 1;
		$appid = 11;
		$time = date("Y-m-d H:i:s");
		$secret = "dRg9HJCaAM";
		
		$sign = md5($appid.$time.$secret);
		$time = urlencode($time);
		$freeze_str = json_encode(array("cityId" => $cityid,"address" => $address));
		$url = "http://10.49.0.138:8888/api/v1/web/cvs/match?appid={$appid}&time={$time}&sign={$sign}";
		//$url = "http://192.168.0.141:80/api/v1/web/cvs/match?appid={$appid}&time={$time}&sign={$sign}";
		
		$header = array(
			'Content-Type: application/json'
		);
		
		$ch = curl_init();
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_POST, 1 );
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $freeze_str);
		curl_setopt ($ch, CURLOPT_TIMEOUT, 10);
		$return = curl_exec ( $ch );
		curl_close ( $ch );
		var_dump($return);
?>
