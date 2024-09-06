<?php

function findElement($arr)
{
    $newArr = [];

    for($i=0;$i<count($arr);$i++)
    {
        if(strpos((string)$arr[$i],'1') !== false ){ 
            $newArr [] = $arr[$i];
        }
    }
    return $newArr;
}

$arr = [12,1,321,34,65,12,361,54,123,11,21,45,12,21,67,21];
$result = findElement($arr);
print_r($result);

?>