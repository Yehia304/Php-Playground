<?php
$moh = 17;
$reverse = 0;

while ((int)$moh > 0) {
	$reverse = ($reverse * 10) + ($moh %10);
	//echo $reverse . "<br>";
	$moh = (int) $moh / 10;
	//echo $moh . "<br>";

}

echo $reverse;








 ?>