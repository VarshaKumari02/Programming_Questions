<?php
function alternateElement($arr1)
{
    $arr3 = [];
    
    for($i=0;$i<count($arr1);$i+=2){
       $arr3[] = $arr1[$i];
    }

    return $arr3;
}

$arr1 = [1,2,3,4,5,6,7,8,9,10];
$result =alternateElement($arr1);
print_r($result);

?>