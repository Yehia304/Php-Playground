<?php 

function pushzeros($val){


foreach ($val as $key => $value) {
	if ($value == 0) {
		unset($val[$key]);
		array_push($val, 0);
	}
}

echo 'Zeros are pushed.' . '<br>';

print_r($val);

echo 'i finally started working as a software engineer';












}

$zeros = array(0,0,0,1,2,3,4,5);

pushzeros($zeros);




?>