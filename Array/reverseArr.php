<?php

// Reverse an Array
function reverseElement($arr)
{
    $len = count($arr) - 1;
    $reverse = [];
    for ($i = $len; $i > 0; $i--) {
        $reverse[] = $arr[$i];
    }
    return $reverse;
}

$arr = [5, 6, 8, 9, 3, 7, 1];
$result = reverseElement($arr);
print_r($result);

?>

arr = [12,1,321,34,65,12,361,54,123,11,21,45,12,21,67,21]
<!-- arr = [13,26,45,39,65,99,117,91,37,89] / 13 -->