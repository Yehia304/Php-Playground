<?php 

$Yehia = 'I Love PHP';

$split = str_split($Yehia);

$string = fun($split,$Yehia);

function fun($yes , $salue){

for ($i = 0; $i < strlen($salue) ; $i++){

	if($yes[$i] == 'a' or $yes[$i] == 'i' or $yes[$i] == 'e' or $yes[$i] == 'o' or $yes[$i] == 'u'){
		$yes[$i] = strtoupper($yes[$i]);

		echo $yes[$i] ;
	}


}

$medhat = implode($yes);

echo $medhat;

$rev = strrev($medhat);

echo "<br>" . $rev . "<br>";

$whatever = str_word_count($medhat);

echo "HAHAHAHAHAHAHAHAH" . "<br>" . $whatever ."<br>";

$whatever = str_word_count($medhat,2);

echo "<pre>";

print_r($whatever);

echo "</pre>";

$position = strrpos($medhat, "PHP");

echo "<br>" . $position . "<br>";


}

echo "<span>GO TO </span> <a href = 'https://www.facebook.com'>FACEBOOK</a>";


 ?>