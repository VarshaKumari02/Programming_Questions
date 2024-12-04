<?php

class RemoveDuplicateArray
{
    function RemoveDuplicate($arr)
    {
        $arrunique = [];
        foreach($arr as $value)
        {
            if(!in_array($value,$arrunique)){
                $arrunique[] = $value;
            }
        }
       return $arrunique;
    }

}
$arr=[10, 20, 30, 10, 40, 20, 50];
$obj = new RemoveDuplicateArray();
print_r($obj->RemoveDuplicate($arr));

?>

