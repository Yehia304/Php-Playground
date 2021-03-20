<?php 


function Anagram($arr1,$arr2){

if (count_chars($arr1,1) == count_chars($arr2,1)) {
	echo 'It is an anagram';
}

else {

	echo "Not an anagram";


}
}


$arr1 = 'anagram';
$arr2 = 'nagaram';
$arr3 = 'garam';


Anagram($arr1,$arr2,$arr3);





 ?>