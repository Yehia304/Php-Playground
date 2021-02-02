<?php


function CheckArSequence($arr){

$new = $arr[1] - $arr[0];
$count = 0 ;


foreach ($arr as $key => $value) {
	$val2 = current($arr);
	$val1 = next($arr);
	
	$diff = $val1 - $val2;
	
	echo "val2 : " . $val2 . "<br>";
	echo "val1 : " . $val1 . "<br>";

	if($diff != $new){

		$count = $count + 1;
	}
}

if ($count == 1) {
		echo "It is an arithmatic sequence";
	}

	else {
		echo "It is not an arithmatic sequence";
	}










}


$Sequence = array(1,3,5,7,9,11,13);

CheckArSequence($Sequence);


  ?>