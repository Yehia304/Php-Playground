<?php


function CheckArSequence($arr){

$new = $arr[1] - $arr[0];
echo $new;

foreach ($arr as $key => $value) {
	$diff = $arr[$key+1] - $value;

	if($diff != $new){

		echo "Not arithmatic sequence";
	}

	else {
		echo "Arithmatic sequence keep going" . "<br>";
	}
	




}










}


$Sequence = array(1,3,5,7,9,11,13);

CheckArSequence($Sequence);


  ?>