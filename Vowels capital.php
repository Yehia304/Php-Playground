<?php 

$Yehia = "aeioufckfiawsaetkfck";
$split = str_split($Yehia);


function Yehia($Salue,$Yehia){

for ($i = 0 ; $i<strlen($Yehia) ; $i++)
{
	if ($Salue[$i] == "a" or $Salue[$i] == "i" or $Salue[$i] == "o" or $Salue[$i] == "e" or $Salue[$i] == "u"){

		$Salue[$i] = strtoupper($Salue[$i]);

		echo  $Salue[$i] . "<br>" ;
	}
	
}
echo implode($Salue);
}

Yehia($split,$Yehia);

