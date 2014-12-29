<?php  
$client=new SoapClient("http://61.160.250.37:8080/axis/JiaoTongBank.jws?wsdl");
//$client=new SoapClient("http://localhost:8080/axis/services/LocalJiaoTongBank?wsdl");
$s = "1.0.0.0|301320453119716|20130605090153578509|20130605|090153|0|0.01|CNY|120701080096464|120701080096464||1|http://jao.taocz.com/index.php?app=shop.payreturn&act=jtbank&mian=120701080096464|http://jao.taocz.com/index.php?app=shop.payreturn&act=jtbank&mian=120701080096464||||||0";
$result = $client->getSign($s);

var_dump(json_decode($result, true));




?>


