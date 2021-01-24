<?php

$file = 'Directory';

echo __DIR__;

if(is_dir(__DIR__ . "/". $file ) ){

echo "Exists";
}

mkdir($file);
echo "<br> DOESNT EXIT but i already created it.";
$newdir = __DIR__ . "/" . $file;
echo "<br>" . $newdir;


//file_put_contents($newdir . '/Php.txt', "Yehia is HUGE");

//$mahmod = file_get_contents($newdir . '/Php.txt');

//echo "<br>". $mahmod;

//chmod($newdir . "/Php.txt", 0444);

if(is_writable($newdir . "/Php.txt")){

	echo "<br> Writeable";
}

echo "<br> File is not even writable";
$directory = $newdir . "/Php.txt";
echo "<br>" . $directory;
copy($newdir . "/Php.txt", $newdir . "/medhat.txt" );

$array = pathinfo(__DIR__);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br>";

$wha2 = scandir($array['dirname']);
//echo "<pre>";
//print_r($wha2);
//echo "</pre>";

if(array_search('asdasd', $wha2)){
	echo "<br> A7A";
}
else{
	echo "HAHAHAHAHAHAHAHAH";
}

$filegot = fopen($newdir . "/Php.txt", 'w');
//$content = fread($filegot, filesize($newdir . "/Php.txt"));
//echo "<br>" . $content;
fwrite($filegot, "Merna is lovely.");
echo "<br> Handled";
$written = file_get_contents($directory);
echo "<br>" . $written;
fclose($filegot);
?>