<?php

function tablePrint($num){
    for($i=1;$i<=10;$i++){
        $res = $num * $i;
        echo "$num". "*" . "$i" . "=" . "$res"."<br>";
    }
}

tablePrint(2);

?>
