<?php

function countnumbers($value,$start)
{
	for ($i=$start; $i <= $value ; $i++) { 
		echo $i . "<br>";
	}
}

function patterncalculator($val){

for ($i=0; $i < $val ; $i++) { 
	for ($j=0; $j <$i ; $j++) { 
		echo "*";
	}
	echo "<br>";
}
}

function calculatestring($str)
{
	$new = "";
	$arr = array();
	$split = str_split($str);
	foreach ($split as $key => $value) {
		if (is_numeric($value)) {
			$new = $new . $value;
		}
		if(!is_numeric($split[$key+1]) or is_null($split[$key+1])){

			array_push($arr, $new);
			$new = "";
		}
		echo $new;
		echo "<br>";
	}
	
	$sum = array_sum($arr);
	echo $sum;
}

function poweroftwo($value)
{
	if ($value == 0) {
		return "The value is not a power of two";
	}
	elseif ($value == 1) {
		return "The value is a power of two";
	}
	else{
		return poweroftwo($value/2);
	}
}
function powerofthree($value)
{

	if ($value == 0) {
		return "The value is not a power of three";
	}
	elseif ($value == 1) {
		return "The value is a power of three";
	}
	else{
		return powerofthree($value/3);
	}
}
function checkarray($arr){
	$newarray = array();
	foreach ($arr as $key => $value) {
		$new = $value + 1;
		if ($arr[$key+1] != $new) {
			array_push($newarray, $new);
		}

	}
	print_r($newarray);

}
$two = poweroftwo(32);
echo "<br>";
echo $two;
$three = powerofthree(10);
echo $three;
$array = array(1,2,3,5,7,9);
checkarray($array);
// countnumbers(15,5);
// patterncalculator(7);
// calculatestring("88HELLO WORLD3!");

















  ?>