<?php

function countOccurence($arr)
{
    $countVal = [];

    foreach($arr as $value)
    {
        if(isset($countVal[$value]))
        {
            $countVal[$value] ++;
        }else {
            $countVal[$value] = 1;
        }
    }

    foreach ($countVal  as $key => $count){
        echo "$key" . " " . ":" . " " . "$count" . "<br>";
    }

}

$arr =[10,5,6,7,8,9,15,62,2,5,8,6,6,15];
$result=countOccurence($arr);

?>