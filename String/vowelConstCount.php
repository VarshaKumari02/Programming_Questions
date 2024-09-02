<?php

function countVowelConst($str){
    $len = strlen($str);
    $count = 0;
    for($i=0;$i<$len;$i++)
    {
        if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'A' || $str[$i] == 'E' || $str[$i] == 'I' || $str[$i] == 'O' || $str[$i] == 'U'){
            $count = $count + 1;
        }
    }
 $constCount = $len - $count;
 echo "Vowel Count : $count <br>";

 echo "Consonant Count : $constCount";
}

countVowelConst("varsha");

?>