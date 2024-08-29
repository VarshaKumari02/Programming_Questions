<?php

class MaxOfArray
{
    function MaxArray($arr)
    {
       $max= $arr[0];
       for($i=0;$i<count($arr);$i++){
        if($arr[$i]>$max){
            $max = $arr[$i];
        }
        
       }
       return $max;
    }

}

$obj = new MaxOfArray();
print_r($obj->MaxArray([10, 20, 30, 80, 40, 20, 50]));

?>

