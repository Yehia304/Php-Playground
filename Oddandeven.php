<?php


$numbers  = array(1,1,2,2,3,3,4,4,5,5,5);

// function calculate($numbers){
// $count = 0;

// foreach ($numbers as $key => $value) {

// 	for ($i=0; $i <sizeof($numbers) ; $i++) { 
// 		if ($numbers[$i] == $value) {
// 			$count = $count + 1;
// 		}
// 	}

// 	echo "The value " . $value . " exists " . $count . " times <br>";
// 	if (($count % 2 )== 1) {
// 		return $value;
// 	}
// 	$count = 0;
// }

// }

function calculated($numbers){
	$result = 0;

	foreach ($numbers as $key => $value) {
		$result = $result ^ $value;
	}

	return $result;





}


$val = calculated($numbers);

echo $val;












  ?>