<?php

function mergedRemoveDuplicateArray($arr1,$arr2)
{
    $mergedArr = [];
    foreach($arr1 as $value){
        $mergedArr [] = $value;
    }
    foreach($arr2 as $value){
        $mergedArr[] = $value;
    }

    // Remove dulicate of array
    $arrunique =[];
    foreach($mergedArr as $value){
        if(!in_array($value,$arrunique)){
            $arrunique[] = $value;
        }
    }

    // sorting of array element
    $n = count($arrunique);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arrunique[$j] > $arrunique[$j + 1]) {
                // Swap elements
                $temp = $arrunique[$j];
                $arrunique[$j] = $arrunique[$j + 1];
                $arrunique[$j + 1] = $temp;
            }
        }
    }

    return $arrunique ;
}

$arr1 = [1,2,3,1,5,6,8,9,1,5,6];
$arr2 = [1,5,9,6,4,7,10];
$result = mergedRemoveDuplicateArray($arr1,$arr2);
print_r($result);

?>