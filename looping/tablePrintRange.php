<?php

// Function to print a multiplication table within a specified range
function tablePrintRange($start, $end){
    for($i=$start;$i<=$end;$i++){
        for($j=1;$j<=10;$j++){
            $res= $i * $j;
            echo "$i"."*". "$j" . "="."$res" . "<br>";
        }
        echo "<hr>";
    }
}
tablePrintRange(1,5);
?>