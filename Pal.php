<?php 
function Yehia(){
$string = 'yehiaqaihey';

$Me = str_split($string);

$arr = array();

$moh = array_count_values($Me);

foreach ($Me as $key => $value) {
	if ($value == 'e') {
		$Me[$key] = strtoupper($value);
	}
}

print_r($Me);

echo "<br>";

$string = "some string";
$vowels = array("a", 'e', 'i', 'o', 'u');
$after = str_replace($vowels, array_map('strtoupper', $vowels), $string);
echo $after;}

//int_r($Me);

// foreach ($moh as $key => $value) {
// 	if ($value == 1) {
// 		//echo $key." is ODD ";
// 		$yehia = $key;
// 	}
// }
// for ($i=0; $i < count($Me) ; $i++) { 
// 	if ($Me[$i] == $yehia) {
// 		unset($Me[$i]);
// 	}
// }
// echo "<br>";
// print_r($Me);

// $final = implode($Me);
// echo "<br>";
// echo $final;



	 

//}

//echo "<br>"
//echo "<pre>";
//print_r($arr);
//echo "</pre>"




?>