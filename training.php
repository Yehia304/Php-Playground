<?php
$new = "11Yehia 8Mohab";
$str = "";
$arr = array();
$split = str_split($new);
foreach ($split as $key => $value){
    if (is_numeric($value)){

        $str = $str . $value;

    }

    if(!is_numeric($split[$key+1])){

        array_push($arr,$str);

        $str = "";

    }

}

echo $str;

?>