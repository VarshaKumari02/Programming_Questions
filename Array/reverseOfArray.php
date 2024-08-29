<?php

// Reverse of string
function reverseString($str)
{
    $len = strlen($str) - 1;
    $reversed = '';
    for ($i = $len; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

// reverse of array
function reverseArray($arr)
{
    $reversedArr = [];
    $len = count($arr) - 1;
    for ($i = $len; $i >= 0; $i--) {
        $reversedArr[] = $arr[$i];
    }
    $resultArr = [];

    foreach ($reversedArr as $item) {
        $resultArr[] = reverseString($item);
    }

    return $resultArr;
}

$inputArray = ["apple", "banana", "grapes", "mango", "orange"];
$reversedArray = reverseArray($inputArray);
echo "Reversed Array and element is: [";
for ($i = 0; $i < count($reversedArray); $i++) {
    echo $reversedArray[$i];
    if ($i < count($reversedArray) - 1) {
        echo ", ";
    }
}
echo "]\n";
