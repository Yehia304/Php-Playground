<?php 

//$GLOBALS['name'];

function fun(){

	$GLOBALS['name'] = 'Yehia';

	echo $GLOBALS['name'];
}

fun();

$name = 'Mahmoud';

echo "<br>". $GLOBALS['name'];

?>