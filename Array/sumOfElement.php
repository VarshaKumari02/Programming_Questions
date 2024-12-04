<?php

function sumOfElement($arr1)
{
    $sum = 0;
    
    for($i=0;$i<count($arr1);$i++){
       $sum = $sum + $arr1[$i];
    }

    return $sum;
}

$arr1 = [1,2,3,4,5,6,7,8,9,10];
$result =sumOfElement($arr1);
print_r($result);

?>