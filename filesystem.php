<?php  

include "global.php";

include dirname(__FILE__) . "/../Wow.php";

echo $FileFile;

$What = $Yehia;

echo $What . "<br>";

//echo dirname(__FILE__);

$file = "File.txt";

if(file_exists($file)){

	echo "3bas is = file <br>";

	file_put_contents("Yehia.txt", "AHAHAHAHAHAH ABAS ABAS ABAS");

	echo "Added";

	$Wha = file_get_contents($file);

	echo $Wha;
}

//add a directory

$name = 'Yehia';

mkdir($name);

echo "<br> Directory added.";

$www = "Baba";

removedir($www,1);



function removedir($value,$offset)
{
	echo $offset . $value ."<br>";

	if($offset == 1){
		rmdir($value);
		echo "<br>" . $value . "directory is removed.";
	}
	
}





?>