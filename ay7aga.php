<?php 

$str = "whatever'oclock";

$skip = addslashes($str);

echo $str ."<br>" . $skip;

$then = stripslashes($skip);

echo "<br>" .$then;


 ?>