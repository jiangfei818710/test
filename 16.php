<?

$sn = '141220164756334';
$commonCode = "NHCJ".rand(1000000,9999999).rand(100000,999999);
						$strSQL="INSERT INTO tcz_coupon_sn(coupon_id,user_id,begintime,endtime,commoncode,money,minprice,issue,ischecked,createtime)
								VALUE(1376,'114833','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s", (time()+86400*60))."','".$commonCode."',50,100,1,0,now())";
				
echo $strSQL , '<br>';



$sql = "insert into tcz_specact_luck_draw (name,order_sn_main,uid,specact_tag,beizhu, level) values ('{$commonCode}', '{$sn}', '114833', 'nhcj', '100', '50')";
echo $sql;		



//$commonCode = "NHCJ".rand(1000000,9999999).rand(100000,999999);
//						$strSQL="INSERT INTO tcz_coupon_sn(coupon_id,user_id,begintime,endtime,commoncode,money,minprice,issue,ischecked,createtime)
//								VALUE(1375,'87620','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s", (time()+86400*60))."','".$commonCode."',30,50,1,0,now())";
//				
//echo $strSQL , '<br>';
//
//
//
//$sql = "insert into tcz_specact_luck_draw (name,order_sn_main,uid,specact_tag,beizhu, level) values ('{$commonCode}', '{$sn}', '87620', 'nhcj', '50', '30')";
//echo $sql;	
?>

	
