<?php

function commonElement($arr1,$arr2)
{
    $common = [];

    for($i=0;$i<count($arr1);$i++){
        for($j=0;$j<count($arr1);$j++){
            if($arr1[$i] == $arr2[$j])
            $common[] = $arr1[$i];
        }
    }
    return $common;
}

$arr1 = [1,2,3,4,5,6,7];
$arr2 = [2,4,5,6,3,9,10];
$result =commonElement($arr1,$arr2);
print_r($result);

?>