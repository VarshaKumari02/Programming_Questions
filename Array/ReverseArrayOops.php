<?php

class ReverseArrayOops
{
    public $newArr = [];
    function reverse($arr){
        $len = count($arr)-1;
        for($i = $len; $i >=0 ; $i--){
            $this->newArr[] = $arr[$i];
        }

        foreach($this->newArr as $item){
            echo "$item ";
        }
    }
}

$obj = new ReverseArrayOops();
$obj->reverse([10,20,30,40,50]);

?>