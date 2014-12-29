<?php
$memcache = new Memcache();    
$memcache->addServer('127.0.0.1', 11211 ) or die ( "Could not connect Memcached server!" );    
$memcache->set( 'aaa', "hello Memcached!<br/>");  
echo $memcache->get('aaa')

?>