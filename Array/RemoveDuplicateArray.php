<?php

class RemoveDuplicateArray
{
    function RemoveDuplicate($arr)
    {
        $len = count($arr);
        $uniqueArr = [];
        
        for($i=0; $i < $len; $i++){
            $found = false;
            for($j=0; $j <count($uniqueArr); $j++){
                if ($arr[$i] == $uniqueArr[$j]) {
                    $found = true;  
                    break;
                }
            }
            if (!$found) {
                $uniqueArr[] = $arr[$i];
            }
        }
        
        return $uniqueArr;
    }

}

$obj = new RemoveDuplicateArray();
print_r($obj->RemoveDuplicate([10, 20, 30, 10, 40, 20, 50]));

?>