<?php  









function length($ip){



$ip = explode(" ", $ip);

$len = sizeof($ip) - 1;

$length = strlen($ip[$len]);

echo $length;





}







$ip = 'Yehia Ibrahim';

length($ip);

















?>