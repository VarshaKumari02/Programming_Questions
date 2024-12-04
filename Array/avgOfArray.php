<?php

function avgOfArray($arr)
{
    $len = count($arr);
    $avg= 0;
    $sum =0;
    for($i=0;$i< $len;$i++){
        $sum += $arr[$i];
    }
    $avg = $sum / $len;
    return $avg;
}
$arr =[10,5,6,7,8,9,15,62];
$result=avgOfArray($arr);
echo $result;

?>