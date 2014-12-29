<?php
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
//$redis->connect('127.0.0.1'); // port 6379 by default
//$redis->connect('127.0.0.1', 6379, 2.5); // 2.5 sec timeout.
$redis->set('key', 'This is your value');
echo $redis->get('key');
?>