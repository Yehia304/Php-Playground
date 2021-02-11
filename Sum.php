<?php

function display($new){

    echo $new;

}

$yehia = 'yehiaelsayedibrahim';

$vowels = array('a','e','i','o','u');

$new = str_replace($vowels, array_map('strtoupper', $vowels), $yehia);

display($new);


$string = 'some string';

$split = str_split($string);

foreach ($split as $key => $value) {
	if ($split[$key] == 'i' or $split[$key] == 'o' or $split[$key] == 'a' or $split[$key] == 'e' or $split[$key] =='u') {
		$split[$key] = strtoupper($split[$key]);
	}
}
echo "<br>";
echo implode($split);

foreach ($color as $value) {

	//echo $value;
	echo "<li>$value</li>";
}
echo "</ul>";














  ?>