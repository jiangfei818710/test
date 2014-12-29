<?
 
/**
 * 获取 IP  地理位置
 * 淘宝IP接口
 * @Return: array
 */
function getCity($ip)
{
$url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
$ip=json_decode(file_get_contents($url));
if((string)$ip->code=='1'){
  return false;
  }
  $data = (array)$ip->data;
return $data;
}
print_r(getCity('61.160.250.37'));
?>