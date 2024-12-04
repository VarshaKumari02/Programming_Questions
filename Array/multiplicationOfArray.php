<?php

function multiplication($arr1, $arr2){
     $mult = [];
     $len = count($arr1);
     $len1 = count($arr2);
     if($len != $len1){
         echo "array of length must be equal to print multiplication of array.";
         return;
     }
     for($i=0;$i<$len;$i++){
         $mult[$i] = $arr1[$i] * $arr2[$i];
     }
     print_r($mult);
    
}
$arr1=[1,2,3,4,5];
$arr2=[1,2,3,4,5];
multiplication($arr1, $arr2);

?>